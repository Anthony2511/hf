<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Backpack\PageManager\app\Models\Page;
use App\Models\Competition;

class CompetitionController extends Controller
{
    public function index(Request $request)
    {
        $page = Page::where('template', 'competitions_index')->firstOrFail();
        $this->data['competitions'] = Competition::orderBy('startDate')->where('isFinish', 'not-finish')->get();

        $this->data['title'] = $page->title;
        $this->data['page'] = $page->withFakes();

        /************/
        $query = Competition::query();


        if ($request->has('type')) {
            if ($request->get('type') !== 'all') {
                $query->where('type', $request->get('type'));
            }
        }

        if ($request->has('order')) {
            $query->orderBy('startDate', $request->get('order'));
        }


        $this->data['competitions'] = $query->paginate(6);

        if ($request->ajax()) {
            return [
                'competitions' => view('partials.single.competition.item_competition',
                    [
                        'competitions' => $this->data['competitions'],
                    ])->render(),
                'next_page' => $this->data['competitions']->nextPageUrl()
            ];
        }

        $this->data['getLoadMoreLink'] = $this->getLoadMoreLink($request);

        return view('pages.competitions.' . $page->template, $this->data);
    }

    public function filter(Request $request)
    {

        $query = Competition::query();

        if ($request->has('type')) {
            $query->where('type', $request->get('type')
            );
        }

        if ($request->has('order')) {
            $query->orderBy('startDate', $request->get('order'));
        }


        $competitions = $query->paginate(3);

        if ($request->ajax()) {
            return [
                'competitions' => view('partials.single.competition.item_competition',
                    [
                        'competitions' => $competitions
                    ])->render(),
                'next_page' => $competitions->nextPageUrl()
            ];
        }

        return view('pages.competitions.competitions-filter',
            [
                'competitions' => $competitions
            ]);
    }

    public function show(Competition $competition)
    {
        return view('pages.competitions.competitions_show', [
            'competition' => $competition
        ]);
    }

    public function getLoadMoreLink(Request $request) {

        $querystring = '';

        if ($request->has('status') ) {
            $querystring .= '&status=' . $request->get('status');
        }

        if ($request->has('order') ) {
            $querystring .= '&order=' . $request->get('order');
        }

        return $querystring;
    }
}

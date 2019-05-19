<?php

namespace App\Http\Controllers;

use App\Models\Trainer;
use Illuminate\Http\Request;
use Backpack\PageManager\app\Models\Page;
use App\Models\Competition;
use App\Models\Discipline;
use App\Models\Division;

class TrainerController extends Controller
{
    public function index(Request $request)
    {
        $page = Page::where('template', 'trainers_index')->firstOrFail();
        $this->data['trainers'] = Trainer::orderBy('lastname', 'ASC')->get();


        $this->data['title']          = $page->title;
        $this->data['page']           = $page->withFakes();

        $this->data['disciplines'] = Discipline::orderBy('name', 'ASC')->get();
        $this->data['divisions'] = Division::orderBy('name', 'ASC')->get();

        /**********/
        $query = Trainer::query();
        if ($request->has('discipline')) {
            if ($request->get('discipline') !== 'all') {
                $query->whereHas('disciplines', function ($query) use ($request) {
                    $query->where('slug', $request->get('discipline'));
                });
            }
        }
        if ($request->has('division')) {
            if ($request->get('division') !== 'all') {
                $query->whereHas('divisions', function ($query) use ($request) {
                    $query->where('slug', $request->get('division'));
                });
            }
        }


        $this->data['trainers'] = $query->paginate(3);

        if ($request->ajax()) {
            return [
                'trainers' => view('partials.single.trainer.item_trainer',
                    [
                        'trainers' => $this->data['trainers']
                    ])->render(),
                'next_page' => $this->data['trainers']->nextPageUrl()
            ];
        }

        $this->data['getLoadMoreLink'] = $this->getLoadMoreLink($request);

        return view('pages.trainers.' . $page->template, $this->data);
    }

    public function filter(Request $request)
    {

        $query = Trainer::query();
        if ($request->has('discipline')) {
            $query->whereHas('disciplines', function ($query) use ($request) {
                $query->where('slug', $request->get('discipline'));
            });
        }
        if ($request->has('division')) {
            $query->whereHas('divisions', function ($query) use ($request) {
                $query->where('slug', $request->get('division'));
            });
        }

        $trainers = $query->paginate(3);

        if ($request->ajax()) {
            return [
                'trainers' => view('partials.single.trainers.item_trainer',
                    [
                        'trainers' => $trainers
                    ])->render(),
                'next_page' => $trainers->nextPageUrl()
            ];
        }

        return view('pages.trainers.trainers-filter',
            [
                'trainers' => $trainers
            ]);
    }

    public function show(Trainer $trainer)
    {
        $this->data['competitions'] = Competition::orderBy('startDate', 'ASC')->limit(2)->get();

        return view('pages.trainers.trainers_show', [
            'trainer' => $trainer,
            'competitions' => $this->data['competitions']
        ]);
    }

    public function getLoadMoreLink(Request $request) {

        $querystring = '';

        if ($request->has('discipline') ) {
            $querystring .= '&discipline=' . $request->get('discipline');
        }

        if ($request->has('division') ) {
            $querystring .= '&division=' . $request->get('division');
        }

        return $querystring;
    }
}

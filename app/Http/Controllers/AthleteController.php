<?php

namespace App\Http\Controllers;

use App\Models\Discipline;
use App\Models\Division;
use Illuminate\Http\Request;
use Backpack\PageManager\app\Models\Page;
use App\Models\Athlete;

class AthleteController extends Controller
{
    public function index(Request $request)
    {
        $page = Page::where('template', 'athletes_index')->firstOrFail();

        $this->data['title'] = $page->title;
        $this->data['page'] = $page->withFakes();

        $this->data['disciplines'] = Discipline::orderBy('name', 'ASC')->get();
        $this->data['division'] = Division::orderBy('name', 'ASC')->get();

        /************/
        $query = Athlete::query();
        if ($request->has('discipline')) {
            if ($request->get('discipline') !== 'all') {
                $query->whereHas('disciplines', function ($query) use ($request) {
                    $query->where('slug', $request->get('discipline'));
                });
            }
        }
        if ($request->has('division')) {
            if ($request->get('division') !== 'all') {
                $query->whereHas('division', function ($query) use ($request) {
                    $query->where('slug', $request->get('division'));
                });
            }
        }

        if ($request->has('status')) {
            if ($request->get('status') !== 'all') {
                $query->where('status', $request->get('status'));
            }
        }


        $this->data['athletes'] = $query->paginate(3);

        if ($request->ajax()) {
            return [
                'athletes' => view('partials.single.athlete.item_athlete',
                    [
                        'athletes' => $this->data['athletes'],
                    ])->render(),
                'next_page' => $this->data['athletes']->nextPageUrl()
            ];
        }

        $this->data['getLoadMoreLink'] = $this->getLoadMoreLink($request);

        return view('pages.athletes.' . $page->template, $this->data);
    }

    public function filter(Request $request)
    {

        $query = Athlete::query();
        if ($request->has('discipline')) {
            $query->whereHas('disciplines', function ($query) use ($request) {
                $query->where('slug', $request->get('discipline'));
            });
        }
        if ($request->has('division')) {
            $query->whereHas('division', function ($query) use ($request) {
                $query->where('slug', $request->get('division'));
            });
        }

        if ($request->has('status')) {
            $query->where('status', $request->get('status')
            );
        }


        $athletes = $query->paginate(3);

        if ($request->ajax()) {
            return [
                'athletes' => view('partials.single.athlete.item_athlete',
                    [
                        'athletes' => $athletes
                    ])->render(),
                'next_page' => $athletes->nextPageUrl()
            ];
        }

        return view('pages.athletes.athletes-filter',
            [
                'athletes' => $athletes
            ]);
    }

    public function show(Athlete $athlete)
    {
        $athleteDivision = Athlete::where('division_id', $athlete->division)->get();

        return view('pages.athletes.athletes_show', [
            'athlete' => $athlete,
            'athleteDivision' => $athleteDivision
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

        if ($request->has('status') ) {
            $querystring .= '&status=' . $request->get('status');
        }

        return $querystring;
    }
}

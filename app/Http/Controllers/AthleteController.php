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
        $this->data['athletes'] = Athlete::orderBy('lastname', 'ASC')->get();

        $this->data['title'] = $page->title;
        $this->data['page'] = $page->withFakes();

        $this->data['disciplines'] = Discipline::orderBy('name', 'ASC')->get();
        $this->data['division'] = Division::orderBy('name', 'ASC')->get();

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


        $athletes = $query->paginate(9);

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
        return view('pages.athletes.athletes_show', [
            'athlete' => $athlete
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Training;
use Backpack\PageManager\app\Models\Page;
use Illuminate\Http\Request;
use App\Models\Place;
use App\Models\Type;

class TrainingController extends Controller
{
    public function index(Request $request)
    {
        $page = Page::where('template', 'trainings_index')->firstOrFail();
        $this->data['trainings'] = Training::orderBy('type_id', 'ASC')->get();

        $this->data['title']          = $page->title;
        $this->data['page']           = $page->withFakes();

        $this->data['place'] = Place::orderBy('name', 'ASC')->get();
        $this->data['type'] = Type::orderBy('name', 'ASC')->get();

        /**********/
        $query = Training::query();
        if ($request->has('place')) {
            if ($request->get('place') !== 'all') {
                $query->whereHas('place', function ($query) use ($request) {
                    $query->where('slug', $request->get('place'));
                });
            }
        }
        if ($request->has('type')) {
            if ($request->get('type') !== 'all') {
                $query->whereHas('type', function ($query) use ($request) {
                    $query->where('slug', $request->get('type'));
                });
            }
        }


        $this->data['trainings'] = $query->paginate(6);

        if ($request->ajax()) {
            return [
                'trainings' => view('partials.single.training.item_training',
                    [
                        'trainings' => $this->data['trainings']
                    ])->render(),
                'next_page' => $this->data['trainings']->nextPageUrl()
            ];
        }

        $this->data['getLoadMoreLink'] = $this->getLoadMoreLink($request);

        return view('pages.trainings.' . $page->template, $this->data);
    }

    public function filter(Request $request)
    {

        $query = Training::query();
        if ($request->has('place')) {
            $query->whereHas('place', function ($query) use ($request) {
                $query->where('slug', $request->get('place'));
            });
        }
        if ($request->has('type')) {
            $query->whereHas('type', function ($query) use ($request) {
                $query->where('slug', $request->get('type'));
            });
        }

        $trainings = $query->paginate(3);

        if ($request->ajax()) {
            return [
                'trainings' => view('partials.single.training.item_training',
                    [
                        'trainings' => $trainings
                    ])->render(),
                'next_page' => $trainings->nextPageUrl()
            ];
        }

        return view('pages.trainings.trainings-filter',
            [
                'trainings' => $trainings
            ]);
    }

    public function getLoadMoreLink(Request $request) {

        $querystring = '';

        if ($request->has('place') ) {
            $querystring .= '&place=' . $request->get('place');
        }

        if ($request->has('type') ) {
            $querystring .= '&type=' . $request->get('type');
        }

        return $querystring;
    }
}

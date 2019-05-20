<?php

namespace App\Http\Controllers;

use App\Models\Size;
use Illuminate\Http\Request;
use Backpack\PageManager\app\Models\Page;
use App\Models\Amenitie;

class AmenitieController extends Controller
{
    public function index(Request $request)
    {
        $page = Page::where('template', 'amenities_index')->firstOrFail();
        $this->data['amenities'] = Amenitie::orderBy('title')->get();

        $this->data['title'] = $page->title;
        $this->data['page'] = $page->withFakes();

        $this->data['sizes'] = Size::orderBy('name', 'ASC')->get();

        /************/
        $query = Amenitie::query();

        if ($request->has('size')) {
            if ($request->get('size') !== 'all') {
                $query->whereHas('sizes', function ($query) use ($request) {
                    $query->where('slug', $request->get('size'));
                });
            }
        }

        if ($request->has('order')) {
            $query->orderBy('price', $request->get('order'));
        }

        if ($request->has('sexe')) {
            if ($request->get('sexe') !== 'all') {
                $query->where('sexe', $request->get('sexe'));
            }
        }

        $this->data['amenities'] = $query->paginate(3);

        if ($request->ajax()) {
            return [
                'amenities' => view('partials.single.amenitie.item_amenitie',
                    [
                        'amenities' => $this->data['amenities'],
                    ])->render(),
                'next_page' => $this->data['amenities']->nextPageUrl()
            ];
        }

        $this->data['getLoadMoreLink'] = $this->getLoadMoreLink($request);

        return view('pages.amenities.' . $page->template, $this->data);
    }

    public function filter(Request $request)
    {

        $query = Amenitie::query();
        if ($request->has('size')) {
            $query->whereHas('sizes', function ($query) use ($request) {
                $query->where('slug', $request->get('size'));
            });
        }

        if ($request->has('order')) {
            $query->orderBy('price', $request->get('order'));
        }

        if ($request->has('sexe')) {
            if ($request->get('sexe') !== 'all') {
                $query->where('sexe', $request->get('sexe'));
            }
        }


        $amenities = $query->paginate(3);

        if ($request->ajax()) {
            return [
                'amenities' => view('partials.single.amenitie.item_amenitie',
                    [
                        'amenities' => $amenities
                    ])->render(),
                'next_page' => $amenities->nextPageUrl()
            ];
        }

        return view('pages.amenities.amenities-filter',
            [
                'amenities' => $amenities
            ]);
    }

    public function getLoadMoreLink(Request $request) {

        $querystring = '';

        if ($request->has('size') ) {
            $querystring .= '&size=' . $request->get('size');
        }

        if ($request->has('sexe') ) {
            $querystring .= '&sexe=' . $request->get('sexe');
        }

        if ($request->has('order') ) {
            $querystring .= '&order=' . $request->get('order');
        }

        return $querystring;
    }
}

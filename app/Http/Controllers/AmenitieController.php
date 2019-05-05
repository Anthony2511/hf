<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Backpack\PageManager\app\Models\Page;
use App\Models\Amenitie;

class AmenitieController extends Controller
{
    public function index()
    {
        $page = Page::where('template', 'amenities_index')->firstOrFail();
        $this->data['amenities'] = Amenitie::orderBy('title')->get();

        $this->data['title'] = $page->title;
        $this->data['page'] = $page->withFakes();

        return view('pages.' . $page->template, $this->data);
    }
}

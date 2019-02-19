<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Backpack\PageManager\app\Models\Page;
use App\Models\Athlete;

class AthleteController extends Controller
{
    public function index()
    {
        $page = Page::where('template', 'athletes_index')->firstOrFail();
        $this->data['athletes'] = Athlete::orderBy('lastname', 'ASC')->get();

        $this->data['title']          = $page->title;
        $this->data['page']           = $page->withFakes();

        return view('pages.athletes.' . $page->template, $this->data);
    }

    public function show(Athlete $athlete)
    {
        return view('pages.athletes.athletes_show', [
            'athlete' => $athlete
        ]);
    }
}

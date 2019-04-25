<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Backpack\PageManager\app\Models\Page;
use App\Models\Competition;

class CompetitionController extends Controller
{
    public function index()
    {
        $page = Page::where('template', 'competitions_index')->firstOrFail();
        $this->data['competitions'] = Athlete::orderBy('startDate')->get();

        $this->data['title'] = $page->title;
        $this->data['page'] = $page->withFakes();

        return view('pages.competitions.' . $page->template, $this->data);
    }
}

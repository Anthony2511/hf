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
        $this->data['competitions'] = Competition::orderBy('startDate')->where('isFinish', 'not-finish')->get();

        $this->data['title'] = $page->title;
        $this->data['page'] = $page->withFakes();

        return view('pages.competitions.' . $page->template, $this->data);
    }

    public function show(Competition $competition)
    {
        return view('pages.competitions.competitions_show', [
            'competition' => $competition
        ]);
    }
}

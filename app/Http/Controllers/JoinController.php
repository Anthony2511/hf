<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Backpack\PageManager\app\Models\Page;
use App\Models\Competition;

class JoinController extends Controller
{
    public function index()
    {
        $page = Page::where('template', 'join_index')->firstOrFail();
        $this->data['competitions'] = Competition::orderBy('startDate', 'ASC')->limit(2)->get();

        $this->data['title'] = $page->title;
        $this->data['page'] = $page->withFakes();
        return view('pages.' . $page->template, $this->data, [
            'competitions' => $this->data['competitions']
        ]);
    }
}

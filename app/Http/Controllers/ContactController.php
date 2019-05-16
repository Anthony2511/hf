<?php

namespace App\Http\Controllers;

use App\Models\Competition;
use Illuminate\Http\Request;
use Backpack\PageManager\app\Models\Page;

class ContactController extends Controller
{
    public function index()
    {
        $page = Page::where('template', 'contact_index')->firstOrFail();
        $this->data['competitions'] = Competition::orderBy('startDate', 'ASC')->limit(2)->get();

        $this->data['title'] = $page->title;
        $this->data['page'] = $page->withFakes();
        return view('pages.' . $page->template, $this->data, [
            'competitions' => $this->data['competitions']
        ]);
    }
}

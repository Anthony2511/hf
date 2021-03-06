<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Backpack\PageManager\app\Models\Page;

class RecordController extends Controller
{
    public function index()
    {
        $page = Page::where('template', 'record_index')->firstOrFail();

        $this->data['title'] = $page->title;
        $this->data['page'] = $page->withFakes();
        return view('pages.' . $page->template, $this->data);
    }
}

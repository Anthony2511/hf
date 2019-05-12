<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Backpack\PageManager\app\Models\Page;

class JoinController extends Controller
{
    public function index()
    {
        $page = Page::where('template', 'join_index')->firstOrFail();

        $this->data['title'] = $page->title;
        $this->data['page'] = $page->withFakes();
        return view('pages.' . $page->template, $this->data);
    }
}

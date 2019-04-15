<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Backpack\PageManager\app\Models\Page;
use App\Models\Internship;
use Illuminate\Validation\Rules\In;

class InternshipController extends Controller
{
    public function index()
    {
        $page = Page::where('template', 'internships_index')->firstOrFail();
        $this->data['internships'] = Internship::orderBy('startDay')->get();

        $this->data['title']          = $page->title;
        $this->data['page']           = $page->withFakes();

        return view('pages.internships.' . $page->template, $this->data);
    }

    public function show(Internship $internship)
    {
        return view('pages.internships.internships_show', [
            'internship' => $internship
        ]);
    }
}

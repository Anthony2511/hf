<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Backpack\PageManager\app\Models\Page;
use App\Models\Trainers;

class TrainerController extends Controller
{
    public function index()
    {
        $page = Page::where('template', 'trainers_index')->firstOrFail();
        $this->data['trainers'] = Athlete::orderBy('lastname', 'ASC')->get();

        $this->data['title']          = $page->title;
        $this->data['page']           = $page->withFakes();

        return view('pages.trainers.' . $page->template, $this->data);
    }
}

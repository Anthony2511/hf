<?php

namespace App\Http\Controllers;

use App\Models\Trainer;
use Illuminate\Http\Request;
use Backpack\PageManager\app\Models\Page;
use App\Models\Training;
use App\Models\Discipline;
use App\Models\Division;

class TrainerController extends Controller
{
    public function index()
    {
        $page = Page::where('template', 'trainers_index')->firstOrFail();
        $this->data['trainers'] = Trainer::orderBy('lastname', 'ASC')->get();

        $this->data['title']          = $page->title;
        $this->data['page']           = $page->withFakes();

        return view('pages.trainers.' . $page->template, $this->data);
    }

    public function show(Trainer $trainer)
    {
        return view('pages.trainers.trainers_show', [
            'trainer' => $trainer
        ]);
    }
}

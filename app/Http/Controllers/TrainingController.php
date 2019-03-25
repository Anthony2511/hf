<?php

namespace App\Http\Controllers;

use App\Models\Training;
use Illuminate\Http\Request;

class TrainingController extends Controller
{
    public function index()
    {
        $page = Page::where('template', 'trainings_index')->firstOrFail();
        $this->data['trainings'] = Training::orderBy('type_id', 'ASC')->get();

        $this->data['title']          = $page->title;
        $this->data['page']           = $page->withFakes();

        return view('pages.' . $page->template, $this->data);
    }
}

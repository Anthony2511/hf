<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Athlete;

class AthleteController extends Controller
{
    public function index()
    {
        $athletes = Athlete::orderBy('lastname', 'ASC')->get();

        return view('pages.athletes.athletes_index', [
            'athletes' => $athletes
        ]);
    }
}

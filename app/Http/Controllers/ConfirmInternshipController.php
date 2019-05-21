<?php

namespace App\Http\Controllers;

use App\Models\Internship;
use Illuminate\Http\Request;

class ConfirmInternshipController extends Controller
{
    public function index()
    {
        $this->data['internships'] = Internship::orderBy('title', 'ASC')->get();
        return view('pages.confirm_index', [
            'internships' => $this->data['internships']
        ]);
    }
}

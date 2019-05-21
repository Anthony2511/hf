<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConfirmInternshipController extends Controller
{
    public function index()
    {
        return view('pages.confirm_index');
    }
}

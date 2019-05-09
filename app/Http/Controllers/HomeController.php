<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Models\Athlete;
use Backpack\PageManager\app\Models\Page;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function index()
    {

        $page = Page::where('template', 'home_index')->firstOrFail();
        $this->data['athletes'] = Athlete::inRandomOrder()->orderBy('lastname', 'ASC')->limit(3)->get();
        $this->data['articles'] = Article::orderBy('date', 'DESC')->limit(2)->get();

        $this->data['title'] = $page->title;
        $this->data['page'] = $page->withFakes();

        return view('pages.' . $page->template, $this->data, [
            'athletes' => $this->data['athletes'],
            'articles' => $this->data['articles']
        ]);

    }

    /**
     * Show the application dashboard.
     *
     * @return Response
     */
    public function show()
    {
        return view('home');
    }
}

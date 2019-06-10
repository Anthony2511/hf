<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Competition;
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
        $athletes = $this->data['athletes'];

        $this->data['articles'] = Article::orderBy('date', 'DESC')->limit(2)->get();
        $articles = $this->data['articles'];

        $this->data['competitionsA'] = Competition::orderBy('startDate', 'ASC')->whereNotNull('content')->where('isFinish', 'not-finish')->limit(1)->get();
        $competitionsA = $this->data['competitionsA'];

        $this->data['competitionsB'] = Competition::orderBy('startDate', 'ASC')->whereNull('content')->where('isFinish', 'not-finish')->limit(2)->get();
        $competitionsB = $this->data['competitionsB'];


        $this->data['title'] = $page->title;
        $this->data['page'] = $page->withFakes();

        return view('pages.' . $page->template, $this->data, [
            'athletes' => $athletes,
            'articles' => $articles,
            'competitionsA' => $competitionsA,
            'competitionsB' => $competitionsB,
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

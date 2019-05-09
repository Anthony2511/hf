<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Backpack\PageManager\app\Models\Page;

class ArticleController extends Controller
{
    public function index()
    {
        $page = Page::where('template', 'articles_index')->firstOrFail();
        $this->data['articles'] = Article::orderBy('date')->get();

        $this->data['title'] = $page->title;
        $this->data['page'] = $page->withFakes();

        return view('pages.articles.' . $page->template, $this->data);
    }

    public function show( Article $article)
    {
        return view('pages.articles.articles_show', [
            'article' => $article
        ]);
    }
}

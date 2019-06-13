<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Backpack\PageManager\app\Models\Page;

class ArticleController extends Controller
{
    public function index(Request $request)
    {
        $page = Page::where('template', 'articles_index')->firstOrFail();
        $this->data['articles'] = Article::orderBy('date', 'DESC')->get();

        $this->data['title'] = $page->title;
        $this->data['page'] = $page->withFakes();

        /************/
        $query = Article::query();
        if ($request->has('order')) {
            $query->orderBy('date', $request->get('order'));
        }

        $this->data['articles'] = $query->paginate(4);

        if ($request->ajax()) {
            return [
                'articles' => view('partials.single.article.item_article',
                    [
                        'articles' => $this->data['articles'],
                    ])->render(),
                'next_page' => $this->data['articles']->nextPageUrl()
            ];
        }

        $this->data['getLoadMoreLink'] = $this->getLoadMoreLink($request);

        return view('pages.articles.' . $page->template, $this->data);
    }

    public function filter(Request $request)
    {

        $query = Article::query();
        if ($request->has('order')) {
            $query->orderBy('date', $request->get('order'));
        }

        $articles = $query->paginate(2);

        if ($request->ajax()) {
            return [
                'articles' => view('partials.single.article.item_article',
                    [
                        'articles' => $articles
                    ])->render(),
                'next_page' => $articles->nextPageUrl()
            ];
        }

        return view('pages.articles.articles-filter',
            [
                'articles' => $articles
            ]);
    }

    public function show( Article $article)
    {
        $comments = $article->comments()->paginate(10);
        $numberOfComments = $article->comments()->count();

        return view('pages.articles.articles_show', [
            'article' => $article,
            'comments' => $comments,
            'numberOfComments' => $numberOfComments
        ]);
    }

    public function getLoadMoreLink(Request $request) {

        $querystring = '';

        if ($request->has('order') ) {
            $querystring .= '&order=' . $request->get('order');
        }

        return $querystring;
    }
}

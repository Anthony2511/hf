<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Session;
use Cookie;
use App\Models\Article;
use App\Models\Comment;

class CommentController extends Controller
{
    public function store(Request $request, $post_id)
    {

        $validator = Validator::make($request->all(), [
            'user_name' => 'required|min:2|max:255',
            'email' => 'required|email',
            'content' => 'required|min:2|max:4000',
            'g-recaptcha-response' => 'required|captcha'
        ]);

        $article = Article::find($post_id);

        $comment = new Comment();
        $comment->user_name = $request->input('user_name');
        $comment->email = $request->input('email');
        $comment->content = $request->input('content');
        $comment->article()->associate($article);

        if ($validator->fails()) {
            return redirect()->to(route('article.single', [$article->slug]) . '#comment')
                ->withInput()
                ->withErrors($validator);
        }

        $comment->save();

        \Session::flash('success', 'Votre message a été posté. Merci !');

        Cookie::queue(Cookie::forever('user_name', $comment->user_name));
        Cookie::queue(Cookie::forever('email', $comment->email));


        return redirect()->to(route('article.single', [$article->slug]) . '?page=' . '#comment');
    }
}

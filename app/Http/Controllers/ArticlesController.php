<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function  index()
    {
        $articles = Article::latest()->get();

        return view('articles', ['articles' => $articles]);
    }

    public function show(article $article)
    {
        return view('articles.show', ['article' => $article]);
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'Title' => 'required',
            'Excerpt' => 'required',
            'Body' => 'required'
        ]);

        $article = new Article();

        $article->Title = request('Title');
        $article->Excerpt = request('Excerpt');
        $article->Body = request('Body');
        $article->save();

//        Article::create([
//            'Title' => request('Title'),
//            'Excerpt' => request('Excerpt'),
//            'Body' => request('Body'),
//        ]);

        return view('articles');
    }

    public function edit(Article $article)
    {
        return view('articles.edit', compact('article'));
    }

    public function update(Article $article, Request $request)
    {
        $article->update($this->validateArticle($request));

        return redirect(route('articles.show', $article));
    }

    public function destroy(Article $article)
    {
        $article->delete();

        return redirect(route('articles'));
    }


    protected function validateArticle(Request $request)
    {
        return $request->validate([
            'Title' => 'required',
            'Excerpt' => 'required',
            'Body' => 'required'
        ]);
    }
}

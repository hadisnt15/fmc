<?php

namespace App\Http\Controllers;

use App\Models\Article;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::with(['user', 'tags'])->where('is_published', 1)->orderByDesc('published_at')->paginate(2);

        return view('pages.article.article-index.index', compact('articles'));
    }

    public function show($slug)
    {
        $article = Article::where('slug', $slug)->firstOrFail();

        return view('pages.article.article-show.show', compact('article'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Article;

class PagesController extends Controller
{
    function homepage()
    {
        $articles= Article::with('messages')->latest('published_at')->withCount('messages')->get();
        return view('pages.homepage', compact('articles'));
    }

    function travel()
    {
        $articles = Article::where('category_id', 1)->latest('published_at')->get();
        return view('pages.homepage', compact('articles'));
    }

    function lifestyle()
    {
        $articles = Article::where('category_id', 2)->latest('published_at')->get();
        return view('pages.homepage', compact('articles'));
    }

    function about()
    {
        $articles = Article::where('is_published', 1)->latest('published_at')->get();
        return view('pages.homepage', compact('articles'));
    }

    function contact()
    {
        $articles = Article::where('is_published', 1)->latest('published_at')->get();
        return view('pages.homepage', compact('articles'));
    }
}

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
        $articles= Article::with('messages')->latest('published_at')->withCount('messages')->where('category_id', 1)->get();
        return view('pages.homepage', compact('articles'));
    }

    function lifestyle()
    {
        $articles= Article::with('messages')->latest('published_at')->withCount('messages')->where('category_id', 2)->get();
        return view('pages.homepage', compact('articles'));
    }

    function about()
    {
        return view('pages.about');
    }

    function contact()
    {
        $articles= Article::with('messages')->latest('published_at')->withCount('messages')->where('is_published', 1)->get();
        return view('pages.homepage', compact('articles'));
    }
}

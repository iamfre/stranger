<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    function homepage()
    {
        $articles = Article::where('is_published', 1)->latest('published_at')->get();
        return view('pages.homepage', compact('articles'));
    }

    function travel()
    {
        $articles = Article::where('is_published', 1)->latest('published_at')->get();
        return view('pages.homepage', compact('articles'));
    }

    function lifestyle()
    {
        $articles = Article::where('is_published', 1)->latest('published_at')->get();
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

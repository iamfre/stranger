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
        return view('pages.homepage');
    }

    function lifestyle()
    {
        return view('pages.homepage');
    }

    function about()
    {
        return view('pages.homepage');
    }

    function contact()
    {
        return view('pages.homepage');
    }
}

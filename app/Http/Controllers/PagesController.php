<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
    function homepage()
    {
        $articles= Article::with('messages')->latest('published_at')->withCount('messages')->where('is_published','=',true)->get();
        return view('pages.homepage', compact('articles'));
    }

    function travel()
    {
        $articles= Article::with('messages')->latest('published_at')->withCount('messages')->where('category_id', 1)->where('is_published','=',true)->get();
        return view('pages.homepage', compact('articles'));
    }

    function lifestyle()
    {
        $articles= Article::with('messages')->latest('published_at')->withCount('messages')->where('category_id', 2)->where('is_published','=',true)->get();
        return view('pages.homepage', compact('articles'));
    }

    function about()
    {
        return view('pages.about');
    }

    function contact()
    {
        return view('pages.contact');
    }

    function registration()
    {
        return view('pages.registration');
    }

    function login()
    {
        if (Auth::check()) {
            return redirect()->route('user.private');
        }
        return view('pages.login');
    }

    function private()
    {
        $userName = auth()->user()->name;
        return view('pages.private', compact('userName'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search()
    {
        $search_text = $_GET['search'];

        $articles = Article::with('messages')
            ->latest('published_at')
            ->withCount('messages')
            ->where('title', 'LIKE', '%' . $search_text . '%')
            ->where('is_published', true)
            ->get();

        return view('pages.search', compact('articles'));
    }
}

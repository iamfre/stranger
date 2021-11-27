<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Models\Message;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    function categoryShow($id)
    {
        $articles= Article::with('messages')->latest('published_at')->withCount('messages')->where('category_id', $id)->where('is_published','=',true)->get();
        return view('pages.homepage', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('pages.articleCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $validateFields = $request->validate([
            'category_id' => 'required',
            'title' => 'required',
            'description' => 'required',
            'body' => 'required',
            'image' => 'required',
            'slug' => 'required',
        ]);
        $validateFields['published_at'] = Carbon::now();
        $article = Article::create($validateFields);

        if ($article){
            return redirect()->route('homepage');
        }

        return redirect()->route('article.create')->withErrors([
            'formError' => 'Произошла ошибка при создании статьи'
        ]);

    }

    /**
     * Display the specified resource.
     *
     * @param Article $article
     * @return Application|Factory|View
     */
    public function show(Article $article)
    {
        $comments = Message::where('article_id', '=', "$article->id")->latest('updated_at')->get();

        $popularArticles = Article::with('messages')->withCount('messages')->latest('messages_count')->where('is_published','=',true)->limit(3)->get();

        $archiveArticles = Article::selectRaw('month(published_at) month, count(id) articles_count')
            ->groupBy('month')
            ->latest('month')
            ->limit(3)
            ->get();

        $categories = Category::all();

        return view('pages.articleDetail', compact('article', 'popularArticles', 'archiveArticles', 'comments', 'categories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}

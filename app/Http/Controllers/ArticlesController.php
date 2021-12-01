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


class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $articles = Article::all();
        return view('pages.articleIndex', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        $categories = Category::all();
        return view('pages.articleCreate', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $validateFields = $request->validate([
            'category_id' => 'required',
            'title' => 'required',
            'description' => 'required',
            'slug' => 'required',
            'body' => 'required',
            'image' => 'required',
            'created_at' => 'nullable',
            'updated_at' => 'nullable',
            'published_at' => 'nullable',
            'is_published' => 'nullable',
        ]);

        if (isset($request->is_published)) {
            $validateFields['published_at'] = Carbon::now();
        }

        $article = Article::create($validateFields);

        if ($article) {
            return redirect()->route('articles.index');
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

        $popularArticles = Article::with('messages')->withCount('messages')->latest('messages_count')->where('is_published', '=', true)->limit(3)->get();

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
     * @param int $id
     * @return Application|Factory|View
     */
    public function edit(Article $article)
    {
        $categories = Category::all();
        return view('pages.articleCreate', compact('article', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, Article $article)
    {

        $validateFields = $request->validate([
            'category_id' => 'required',
            'title' => 'required',
            'description' => 'required',
            'slug' => 'required',
            'body' => 'required',
            'image' => 'required',
            'created_at' => 'nullable',
            'updated_at' => 'nullable',
            'published_at' => 'nullable',
            'is_published' => 'nullable',
        ]);

        if ($validateFields['is_published']) {
            $validateFields['published_at'] = Carbon::now();
        }

        $article->update($validateFields);
        return redirect()->route('articles.index')->withSuccess("Статья: $article->title - обновлена!");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy(Article $article)
    {
        $article->delete();
        return redirect()->route('articles.index')->withDanger("Статья: $article->title - удалена!");
    }

    public function categoryShow($id)
    {
        $articles = Article::with('messages')->latest('published_at')->withCount('messages')->where('category_id', $id)->where('is_published', '=', true)->get();
        return view('pages.homepage', compact('articles'));
    }

    public function publish($id)
    {
        $article = Article::where('id', $id)->first();

        if ($article->is_published) {
            $article->is_published = false;
            $article->published_at = null;
        } else {
            $article->is_published = true;
            $article->published_at = Carbon::now();
        }

        $article->update();

        if ($article->is_published) {
            $changeMsg = '" опубликована!';
        } else {
            $changeMsg = '" снята с публикации!';
        }
        return redirect()->route('articles.index')->withSuccess('Статья: "' . $article->title . $changeMsg);
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;

Route::get('/', [PagesController::class, 'homepage'])->name('homepage');
Route::get('/travel', [PagesController::class, 'travel'])->name('travel');
Route::get('/lifestyle', [PagesController::class, 'lifestyle'])->name('lifestyle');
Route::get('/about', [PagesController::class, 'about'])->name('about');
Route::get('/contact', [PagesController::class, 'contact'])->name('contact');
Route::post('/add-comment', [CommentController::class, 'store'])->name('comment.create');
Route::post('/feedback', [FeedbackController::class, 'store'])->name('feedback.create');
Route::post('/subscribe', [SubscribeController::class, 'store'])->name('subscribe.create');
Route::get('/category/{id}', [ArticlesController::class, 'categoryShow'])->name('category.show');

Route::name('articles.')->prefix('articles')->middleware('auth')->group(function () {
    Route::get('/', [ArticlesController::class, 'index'])->name('index');
    Route::get('/create', [ArticlesController::class, 'create'])->name('create');
    Route::post('/create', [ArticlesController::class, 'store']);
    Route::get('/search', [SearchController::class, 'search'])->name('search');
    Route::get('/{article}/edit', [ArticlesController::class, 'edit'])->name('edit');
    Route::post('/{article}/update', [ArticlesController::class, 'update'])->name('update');
    Route::delete('/{article}/destroy', [ArticlesController::class, 'destroy'])->name('destroy');
    Route::patch('/{id}/publish', [ArticlesController::class, 'publish'])->name('publish');
    Route::get('/{article:slug}', [ArticlesController::class, 'show'])->name('show');
});

Route::name('user.')->group(function () {
    Route::get('/private', [PagesController::class, 'private'])->middleware('auth')->name('private');

    Route::get('/registration', [RegisterController::class, 'registration'])->name('registration');
    Route::post('/registration', [RegisterController::class, 'save']);

    Route::get('/login', [PagesController::class, 'login'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);

    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
});


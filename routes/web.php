<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', [PagesController::class, 'homepage'])->name('homepage');
Route::get('/travel', [PagesController::class, 'travel'])->name('travel');
Route::get('/lifestyle', [PagesController::class, 'lifestyle'])->name('lifestyle');
Route::get('/about', [PagesController::class, 'about'])->name('about');
Route::get('/contact', [PagesController::class, 'contact'])->name('contact');

Route::post('/add-comment', [CommentController::class, 'store'])->name('comment.create');

Route::post('/feedback', [FeedbackController::class, 'store'])->name('feedback.create');

Route::post('/subscribe', [SubscribeController::class, 'store'])->name('subscribe.create');

Route::get('/search', [SearchController::class, 'search'])->name('article.search');

Route::get('/article/create', [ArticlesController::class, 'create'])->middleware('auth')->name('article.create');
Route::post('/article/create', [ArticlesController::class, 'store']);
Route::get('/articles/{article:slug}', [ArticlesController::class, 'show'])->name('article.show');

Route::get('/category/{id}', [ArticlesController::class, 'categoryShow'])->name('category.show');

Route::name('user.')->group(function () {
    Route::get('/private', [PagesController::class, 'private'])->middleware('auth')->name('private');

    Route::get('/registration', [RegisterController::class, 'registration'])->name('registration');
    Route::post('/registration', [RegisterController::class, 'save']);

    Route::get('/login', [PagesController::class, 'login'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);

    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
});


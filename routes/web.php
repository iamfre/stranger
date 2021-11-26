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

Route::get('/search', [SearchController::class, 'search'])->name('article.search');

Route::get('/articles/{article:slug}', [ArticlesController::class, 'show'])->name('article.show');

Route::get('/category/{id}', [ArticlesController::class, 'categoryShow'])->name('category.show');


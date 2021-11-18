<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;

Route::get('/', [PagesController::class, 'homepage'])->name('homepage');
Route::get('/travel/', [PagesController::class, 'travel'])->name('travel');
Route::get('/lifestyle/', [PagesController::class, 'lifestyle'])->name('lifestyle');
Route::get('/about/', [PagesController::class, 'about'])->name('about');
Route::get('/contact/', [PagesController::class, 'contact'])->name('contact');

Route::get('/articles/{article:slug}', [PagesController::class, 'contact'])->name('detail');

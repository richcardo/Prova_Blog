<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'Welcome'])->name('welcome');

Route::get('/contatti', [PageController::class, 'Contacts'])->name('contacts');

Route::get('/chi-sono', [PageController::class,'AboutMe'])->name('about-me');

Route::get('/articles', [PageController::class, 'Articles'])->name('articles');

Route::get('/article/{index}', [PageController::class, 'Article'])->name('article');


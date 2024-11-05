<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\WriterController;

Route::get('/', [PageController::class, 'viewHome'])->name('home');
Route::get('/about', [PageController::class, 'viewAbout'])->name('about');

Route::get('/article/{id}', [ArticleController::class, 'viewArticle'])->name('article');
Route::get('/articles/category/{category}', [ArticleController::class, 'viewArticleByCategory'])->name('articleByCategory');
Route::get('/articles/writer/{writer}', [ArticleController::class, 'viewArticleByWriter'])->name('articleByWriter');
Route::get('/writers', [WriterController::class, 'index'])->name('writers');

Route::get('/popular', [PageController::class, 'viewPopular'])->name('popular');
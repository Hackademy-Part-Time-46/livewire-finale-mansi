<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ArticleController::class, 'index'])->name('articles.index');
Route::get('/article/create', [ArticleController::class, 'create'])->name('articles.create');
Route::get('/article/edit/{article}', [ArticleController::class, 'edit'])->name('articles.edit');

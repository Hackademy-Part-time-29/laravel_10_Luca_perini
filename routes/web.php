<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ContactController;

Route::get('/',[PageController::class, 'WelcomeView'])->name('welcome');
Route::get('/article',[ArticleController::class, 'ArticlesView'])->name('articles');
Route::get('/add-article',[ArticleController::class, 'ArticleCreate'])->name('add-article');
Route::get('/contact-us',[ContactController::class, 'ContactView'])->name('contact-us');
Route::post('/store-article',[ArticleController::class, 'store'])->name('store-article');
Route::post('/contact-us-success',[ContactController::class, 'ContactSuccess'])->name('contact-success');

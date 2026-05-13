<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\RevisorController;
use Illuminate\Support\Facades\Route;


Route::get('/', [ PublicController::class, 'homepage'])->name('homepage');

Route::get('/create/article',[ArticleController::class,'create'])->name('create.article');

Route::get('/article/index',[ArticleController::class,'index'])->name('article.index');

Route::get('/show/article/{article}',[ArticleController::class,'show'])->name('article.show');

Route::get('/category/{category}',[ArticleController::class,'byCategory'])->name('byCategory');

Route::get('/revisor/index', [RevisorController::class, 'index'])->middleware('isRevisor')->name('revisor.index');

Route::patch('/accept/{article}/{routeName}',[RevisorController::class,'accept'])->name('accept');

Route::patch('/reject/{article}/{routeName}',[RevisorController::class,'reject'])->name('reject');

Route::get('/revisor/request', [RevisorController::class, 'becomeRevisor'])->middleware('auth')->name('become.revisor');

Route::get('/make/revisor/{user}', [RevisorController::class, 'makeRevisor'])->name('make.revisor');

Route::get('/search/article', [PublicController::class, 'searchArticles'])->name('article.search');

Route::get('/revisor/index-status',[RevisorController::class,'articleTable'])->middleware('isRevisor')->name('revisor.index-status');

Route::get('/revisor/modify-status/{article}',[RevisorController::class,'modifyStatus'])->middleware('isRevisor')->name('revisor.modify-status');

Route::post('/lingua/{lang}', [PublicController::class, 'setLanguage'])->name('setLocale');
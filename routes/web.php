<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\MerchController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');


Route::get('/chi-siamo', [PublicController::class, 'aboutUs'])->name('aboutUs');


Route::get('/chi-siamo/detail/{name}', [PublicController::class, 'aboutUsdetail'])->name('aboutUsDetail');


Route::get('/contatti', [PublicController::class, 'contacts'] )->name('contacts');

Route::post('/contatti/send', [PublicController::class, 'send_email'])->name('send_email');


Route::get('/articoli', [MerchController::class, 'articoli'])->name('merch.list')->middleware('auth');

Route::get('/merch/dettaglio-articoli/{id}', [MerchController::class, 'dettaglioArticoli'])->name('dettaglio.articoli');


// rotta mail

Route::get('/merch/create', [MerchController::class, 'create'])->name('merch.create')->middleware('auth');

Route::post('/merch/submit', [MerchController::class, 'store'])->name('merch.submit');

// ArticleController

Route::get('article/create', [ArticleController::class, 'create'])->name('article.create')->middleware('auth');

Route::post('article/store', [ArticleController::class, 'store'])->name('article.store')->middleware('auth');

Route::get('/article/index', [ArticleController::class, 'index'])->name('article.index');

Route::get('article/show/{article}', [ArticleController::class, 'show'] )->name('article.show');

// Mostra il form di modifica
Route::get('/article/edit/{article}', [ArticleController::class, 'edit'])->name('article.edit')->middleware('auth');

// Salva le modifiche nel database
Route::put('/article/update/{article}', [ArticleController::class, 'update'])->name('article.update')->middleware('auth');

// Elimina l'articolo
Route::delete('/article/destroy/{article}', [ArticleController::class, 'destroy'])->name('article.destroy')->middleware('auth');

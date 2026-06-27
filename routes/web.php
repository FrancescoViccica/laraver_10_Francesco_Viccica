<?php

use App\Http\Controllers\MerchController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');


Route::get('/chi-siamo', [PublicController::class, 'aboutUs'])->name('aboutUs');


Route::get('/chi-siamo/detail/{name}', [PublicController::class, 'aboutUsdetail'])->name('aboutUsDetail');


Route::get('/contatti', [PublicController::class, 'contacts'] )->name('contacts');


Route::get('/articoli', [MerchController::class, 'articoli'])->name('merch.list')->middleware('auth');


Route::get('/merch/dettaglio-articoli/{id}', [MerchController::class, 'dettaglioArticoli'])->name('dettaglio.articoli');


// rotta mail
Route::post('/contatti/send', [PublicController::class, 'send_email'])->name('send_email');

Route::get('/merch/create', [MerchController::class, 'create'])->name('merch.create')->middleware('auth');

Route::post('/merch/submit', [MerchController::class, 'store'])->name('merch.submit');

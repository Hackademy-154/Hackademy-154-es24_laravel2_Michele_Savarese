<?php

use App\Http\Controllers\Bgg;
use App\Http\Controllers\pagina1;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'homepage']) -> name('Home');

Route::get('/barzelletta', [pagina1::class, 'page1']) -> name('drwho');


Route::get('/i-nostri-giochi', [Bgg::class, 'bgg']) ->name('game');

Route::get('/dettaglio/studente/{id}', [bgg::class,'gamedetail'])->name('gamedetail');

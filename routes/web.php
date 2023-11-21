<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;


Route::get('/', [PublicController::class, 'index'])-> name('index');
Route::get('/article', [PublicController::class, 'article'])-> name('article');
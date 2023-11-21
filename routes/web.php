<?php

use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[PublicController::class, 'welcome'])->name('welcome');

//? Rotta Pagina Lamentele
Route::get('/reclamo', [PublicController::class, 'reclamo'])->name('reclamo');
Route::post('/reclamo/submit', [PublicController::class, 'reclamo_submit'])->name('reclamo_submit');
Route::get('/reclamo/thankyou/{name}', [PublicController::class, 'reclamo_thankyou'])->name('reclamo_thankyou');

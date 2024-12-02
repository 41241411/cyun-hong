<?php

use App\Http\Controllers\CommercialController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaxController;
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

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/tax', [TaxController::class, 'index'])->name('tax');

Route::get('/commercial', [CommercialController::class,'index'])->name('commercial');
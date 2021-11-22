<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/market',[\App\Http\Controllers\MarketController::class,'index'])->name('market.list');
Route::get('/market/create',[\App\Http\Controllers\MarketController::class,'create'])->name('market.create');
Route::post('/market/store',[\App\Http\Controllers\MarketController::class,'store'])->name('market.store');
Route::get('{id}/market/delete',[\App\Http\Controllers\MarketController::class,'delete'])->name('market.delete');
Route::get('{id}/market/edit',[\App\Http\Controllers\MarketController::class,'edit'])->name('market.edit');
Route::post('/market/edit',[\App\Http\Controllers\MarketController::class,'update'])->name('market.update');
Route::post('/market/search',[\App\Http\Controllers\MarketController::class,'search'])->name('market.search');


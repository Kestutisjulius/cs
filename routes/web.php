<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AutoservisasController AS AC;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/autoservices', [AC::class, 'index'])->name('ac_index');
Route::get('/autoservices/create', [AC::class, 'create'])->name('ac_create');
Route::post('/autoservisas/create', [AC::class, 'store'])->name('ac_store');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

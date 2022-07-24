<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController AS HC;
use App\Http\Controllers\AutoservisasController AS AC;
use App\Http\Controllers\MachanikasController AS MC;
use App\Http\Controllers\PaslaugaController AS PC;
use App\Http\Controllers\UserController AS UC;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/autoservisas', [AC::class, 'index'])->name('ac_index');
Route::get('/autoservisas/create', [AC::class, 'create'])->name('ac_create');
Route::post('/autoservisas/create', [AC::class, 'store'])->name('ac_store');
Route::get('/mechanikas', [MC::class, 'index'])->name('mc_index');
Route::get('/mechanikas/create', [MC::class, 'create'])->name('mc_create');
Route::post('/mechanikas/create', [MC::class, 'store'])->name('mc_store');
Route::get('/paslaugos', [PC::class, 'index'])->name('pc_index');
Route::get('/paslauga/create', [PC::class, 'create'])->name('pc_create');
Route::post('/paslauga/create', [PC::class, 'store'])->name('pc_store');
Route::get('/vartotojai', [UC::class, 'index'])->name('uc_index');

Auth::routes();

Route::get('/home', [HC::class, 'index'])->name('home');

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
    return view('dashboard');
})->middleware(['auth'])->name('login');


 Route::get('/dashboard', function () {
     return view('dashboard');
 })->middleware(['auth'])->name('dashboard');


 Route::get('/compras', function () {
     return view('compras.index');
 })->middleware(['auth'])->name('compras');


 Route::get('/facturas', function () {
    return view('facturas.index');
})->middleware(['auth'])->name('facturas');

require __DIR__.'/auth.php';

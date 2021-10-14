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
    return view('pages/home');
})->name('home');

Route::get('/about-us', function () {
    return view('pages/about');
})->name('about');

Route::get('/flower', function () {
    return view('pages/flower');
})->name('flower');

Route::get('/plants', function () {
    return view('pages/plants');
})->name('plants');

Route::get('/trees', function () {
    return view('pages/trees');
})->name('trees');

Route::get('/animals', function () {
    return view('pages/animals');
})->name('animals');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

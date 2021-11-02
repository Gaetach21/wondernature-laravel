<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WondernatureController;

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
Route::get('/', [WondernatureController::class, 'index'])->name('home');
Route::get('/about-us', [WondernatureController::class, 'getabout'])->name('about');
Route::get('/flower', [WondernatureController::class, 'getflower'])->name('flower');
Route::get('/plants', [WondernatureController::class, 'getplants'])->name('plants');
Route::get('/trees', [WondernatureController::class, 'gettrees'])->name('trees');
Route::get('/animals', [WondernatureController::class, 'getanimals'])->name('animals');
Route::get('/mentions', [WondernatureController::class, 'getmentions'])->name('mentions');
Route::get('/contact', [WondernatureController::class, 'getContact'])->name('contact.create');
Route::post('/contact', [WondernatureController::class, 'postContact'])->name('contact.store');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerPeeps;

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

// Route::get('/', function () {
//     return view('homepage');
// });
Route::view('/', 'homepage')->name('home');
// Route::view('/report-corruption','report-corruption')->name('report-corruption');
Route::get('/p', [ControllerPeeps::class,'showP'])->name('people.show');
Route::get('/', [ControllerPeeps::class,'show'])->name('home');
Route::get('/about', [ControllerPeeps::class, 'showAbout'])->name('about');
Route::post('/', [ControllerPeeps::class,'ajouter'])->name('ajouter');

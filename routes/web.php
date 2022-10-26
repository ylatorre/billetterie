<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
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




Route::get("/",[Controller::class, "accueil"])->name("accueil");
Route::get("contact",[Controller::class, "contact"])->name("contact");
Route::get("artiste",[Controller::class, "artiste"])->name("artiste");

Route::get("reservation/{data}",[Controller::class, "reservation"])->name("reservation");
Route::get("GalerieSup",[Controller::class, "GalerieSup"])->name("GalerieSup");

//test axios
Route::get('/axios',[Controller::class, 'axios']);
Route::get('/test',[Controller::class, 'test']);
Route::get('/test/update',[Controller::class, 'update']);




//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->name('dashboard');

//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth'])->name('dashboard');



require __DIR__.'/auth.php';

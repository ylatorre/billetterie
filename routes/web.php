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


//middleware routes are authentified
Route::middleware(['auth'])->group(function () {
    Route::get("reservation/{data}",[Controller::class, "reservation"])->name("reservation");
    Route::get("GalerieSup/{data}",[Controller::class, "GalerieSup"])->name("GalerieSup");
    Route::get("GalerieCentral/{data}",[Controller::class, "GalerieCentral"])->name("GalerieCentral");
    Route::get("GalerieInferieur/{data}",[Controller::class, "GalerieInferieur"])->name("GalerieInferieur");
    Route::get("cour/{data}",[Controller::class, "cour"])->name("cour");
    Route::get("recapitulatifPaiment/{data}",[Controller::class, "recapitulatif"])->name("recapitulatif");
    Route::get("profile",[Controller::class, "profile"])->name("profile");
});


Route::post("verifePlace",[Controller::class, "verifePlace"])->name("verifePlace");
Route::get("verifePlace",[Controller::class, "verifePlace"])->name("verifePlace");


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

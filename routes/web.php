<?php

use App\Http\Controllers\Admin\ApartmentController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

// Route::get('/apartment/map', 'ApartmentController@showMap')->name('apartment.map');
Route::resource('apartments', 'Admin\ApartmentController');
Route::get('apartments/{id}/map', 'Admin\ApartmentController@showMap')->name('apartments.map');




// CREATE 
Route::get("/apartment/create", [ApartmentController::class, "create"])->name("apartment.create");
Route::post("/apartment", [ApartmentController::class, "store"])->name("apartment.store");


// READ 
// route index
Route::get("/apartment", [ApartmentController::class, "index"])->name("apartment.index");
// route show 
Route::get("/apartment/{apartment}", [ApartmentController::class, "show"])->name("apartment.show");

// UPDATE 
// Mostra un form dove l'utente può fare modifiche 
Route::get("/apartment/{id}/edit", [ApartmentController::class, "edit"])->name("apartment.edit");
// la route dell'update posso chiamarla in put o path è indifferente, questa rotta riceverà i dati di edit e aggiornare l'elemento nel database a differenza dello store che crea l'elemento
Route::put("/apartment/{id}", [ApartmentController::class, "update"])->name("apartment.update");

// DESTROY 
Route::delete("/apartment/{id}", [ApartmentController::class, "destroy"])->name("apartment.destroy");

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')
    ->group(function () {
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });

require __DIR__ . '/auth.php';

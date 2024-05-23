<?php

use App\Http\Controllers\ChambreController;
use App\Http\Controllers\PlatController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\TypeController;
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
})->name('acueil');
Route::get('/chambre', [Controller::class, 'chambre'])->name('chambre');
Route::get('/restaurant', [Controller::class, 'resto'])->name('restaurant');
Route::get('/about', [Controller::class, 'about'])->name('about');
Route::get('/contact', [Controller::class, 'contact'])->name('contact');

Route::post('/reservation/store', [Controller::class, 'clientRe'])->name('reservation.store');
Route::post('/Message', [Controller::class, 'submit'])->name('contact.submit');


Auth::routes();


Route::middleware('auth')->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


    Route::resource('reservations',ReservationController::class)->names('reservations');
    Route::get('reservation/create/passent/{id}', [ReservationController::class, 'createP'])
        ->name('reservation.createP');
    Route::get('reservation/create/Engager/{id}', [ReservationController::class, 'createE'])
        ->name('reservation.createE');
    Route::get('reservation/edit/passent/{id}', [ReservationController::class, 'editP'])
        ->name('reservation.editP');
    Route::get('reservation/edit/Engager/{id}', [ReservationController::class, 'editE'])
        ->name('reservation.editE');
    Route::post('reservation/fin/{id}', [ReservationController::class, 'finReservation'])->name('reservation.fin');
 });


 Route::middleware(['auth', 'admin'])->group(function () {
    //Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');
    // Ajoutez d'autres routes pour les administrateurs
    Route::resource('chambres',ChambreController::class)->names('chambres');
    Route::resource('types',TypeController::class)->names('types');
    Route::resource('plats',PlatController::class)->names('plats');
});

Route::middleware(['auth', 'user'])->group(function () {
    //Route::get('/user', [UserController::class, 'index'])->name('user.dashboard');
    // Ajoutez d'autres routes pour les utilisateurs réguliers
});

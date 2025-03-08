<?php

use App\Models\Voyage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VilleController;
use App\Http\Controllers\VoyageController;
use App\Http\Controllers\AutocarController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SocieteController;
use App\Http\Controllers\TypeVoyageController;
use App\Http\Controllers\ModeReglementController;
use App\Http\Controllers\Client\ReservationController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ex', function () {
    $v = Voyage::all();
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/voyages/list', function () {
    $voyages = Voyage::all();
    return view('client.voyages.listevoyage', compact('voyages'));
})->name('voyages.list');
Route::middleware('auth')->group(function () {

    // ======= Clients routes =======
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/detail/voyage', [VoyageController::class, 'detail'])->name('voyage.detail');
    Route::post('/client/create/reservation', [App\Http\Controllers\Client\ReservationController::class, 'create'])->name('client.create.reservation');
    Route::get('/client/societes/{societe}/showVoyageSociete', [SocieteController::class, 'showVoyageSociete'])->name('client.societes.showVoyageSociete.index');

    // ======= Admin routes =======
    Route::middleware('admin')->group(function () {
        Route::get('/admin', function () {return view('admin.Layout.app');})->name('admin');
        Route::resource('autocars', AutocarController::class);
        Route::resource('societes', SocieteController::class);
        Route::resource('voyages', VoyageController::class);
        Route::resource("villes", VilleController::class);
        Route::resource('type_voyages', TypeVoyageController::class);
        Route::resource('modeReglements', ModeReglementController::class);
    });

});

require __DIR__.'/auth.php';


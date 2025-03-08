<?php

use App\Models\Voyage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VoyageController;
use App\Http\Controllers\AutocarController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SocieteController;
use App\Http\Controllers\TypeVoyageController;
use App\Http\Controllers\Client\ReservationController;
use App\Http\Controllers\VilleController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ex', function () {
    $v = Voyage::all();
});

Route::get('/admin', function () {
    if (Auth::check() && Auth::user()->isadmin == 1) {
        return view('admin.Layout.app');
    }
    return redirect('/')->with('error', 'Access denied.');
})->middleware('auth')->name('admin');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/voyages/list', function () {
    $voyages = Voyage::all();
    return view('client.voyages.listevoyage', compact('voyages'));
})->name('voyages.list');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/detail/voyage', [VoyageController::class, 'detail'])->name('voyage.detail');
    Route::post('/client/create/reservation', [App\Http\Controllers\Client\ReservationController::class, 'create'])->name('client.create.reservation');
    // Définition des ressources pour les autocars, sociétés et voyages
    Route::resource('autocars', AutocarController::class);
    Route::resource('societes', SocieteController::class);
    Route::resource('voyages', VoyageController::class);

    Route::resource("villes", VilleController::class);
    Route::resource('type_voyages', TypeVoyageController::class);

    Route::get('/client/societes/{societe}/showVoyageSociete', [SocieteController::class, 'showVoyageSociete'])->name('client.societes.showVoyageSociete.index');
});



require __DIR__ . '/auth.php';

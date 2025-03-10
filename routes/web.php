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
use App\Http\Controllers\EquipementController;
use App\Http\Controllers\AutocarOptionController;
use App\Http\Controllers\OptionController;
use App\Http\Controllers\AutocarEquipementController;
use App\Models\AutocarOption;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ex', function () {
    $v = Voyage::all();
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/voyages/list/', function () {
    $voyages = Voyage::all();
    return view('client.voyages.listevoyage', compact('voyages'));
})->name('voyages.list');
Route::middleware('auth')->group(function () {

    // ======= Clients routes =======
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/detail/voyage', [VoyageController::class, 'detail'])->name('voyage.detail');
    Route::get('/recherche', [VoyageController::class, 'rechercher'])->name('voyages.rechercher');
    Route::post('/client/create/reservation', [App\Http\Controllers\Client\ReservationController::class, 'create'])->name('client.create.reservation');
    Route::get('/client/societes/{societe}/showVoyageSociete', [SocieteController::class, 'showVoyageSociete'])->name('client.societes.showVoyageSociete.index');
    Route::post('/client/store', [App\Http\Controllers\Client\ReservationController::class, 'store'])->name('client.store');

    // ======= Admin routes =======
    Route::middleware('admin')->group(function () {
        Route::get('/admin', function () {return view('admin.Layout.app');})->name('admin');
        Route::resource('autocars', AutocarController::class);
        Route::resource('societes', SocieteController::class);
        Route::resource('voyages', VoyageController::class);
        Route::resource("villes", VilleController::class);
        Route::resource('type_voyages', TypeVoyageController::class);
        Route::resource('modeReglements', ModeReglementController::class);
        Route::resource('autocaroptions', AutocarOptionController::class);
        Route::resource('autocarequipements', AutocarEquipementController::class);
        Route::resource('options', OptionController::class);
        Route::resource('equipements', EquipementController::class);

    });

});

require __DIR__.'/auth.php';


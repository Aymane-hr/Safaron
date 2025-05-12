<?php

use App\Models\Voyage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VilleController;
use App\Http\Controllers\OptionController;
use App\Http\Controllers\VoyageController;
use App\Http\Controllers\AutocarController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SocieteController;
use App\Http\Controllers\EquipementController;
use App\Http\Controllers\TypeVoyageController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\AutocarOptionController;
use App\Http\Controllers\ModeReglementController;
use App\Http\Controllers\AutocarEquipementController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/ex', function () {
    $v = Voyage::all();
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/voyages/list/', [VoyageController::class, 'listVoyages'])->name('voyages.list');


Route::get('/client/societes/{societe}/showVoyageSociete', [SocieteController::class, 'showVoyageSociete'])->name('client.societes.showVoyageSociete.index');

Route::middleware('auth')->group(function () {

    // ======= Clients routes =======
    // Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/detail/voyage', [VoyageController::class, 'detail'])->name('voyage.detail');
    Route::get('/recherche', [VoyageController::class, 'rechercher'])->name('voyages.rechercher');
    Route::get('/client/create/reservation', [App\Http\Controllers\Client\ReservationController::class, 'create'])->name('client.create.reservation');
    Route::post('/client/store', [App\Http\Controllers\Client\ReservationController::class, 'store'])->name('client.store');

    Route::get('/ticket/{id}', [App\Http\Controllers\Client\ReservationController::class, 'show'])->name('ticket.show');
    Route::get('/ticket/{id}/download', [App\Http\Controllers\Client\ReservationController::class, 'download'])->name('ticket.download');

    Route::get('/client/profile/reservations', [App\Http\Controllers\Client\Profile\ReservationController::class, 'index'])->name('client.profile.reservations.index');
    Route::get('/client/profile/dashboard', [App\Http\Controllers\Client\Profile\DashboardController::class, 'index'])->name('client.profile.dashboard.index');
    Route::get('/client/profile/monprofile', [App\Http\Controllers\Client\Profile\MonprofileController::class, 'index'])->name('client.profile.monprofile.index');
    Route::get('/client/profile/parametres', [App\Http\Controllers\Client\Profile\ParametreController::class, 'index'])->name('client.profile.parametres.index');
    Route::put('/client/profile/parametres', [App\Http\Controllers\Client\Profile\ParametreController::class, 'update'])->name('client.profile.parametres.update');
    Route::get('/client/profile/parametres/dropprofileimage', [App\Http\Controllers\Client\Profile\ParametreController::class, 'removeprofileimage'])->name('client.profile.parametres.removeImage');

    Route::delete('/profile/delete-image', [App\Http\Controllers\Client\Profile\ParametreController::class, 'deleteProfileImage'])
    ->name('profile.delete-image');

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
        route::get('/reservation/admin/list', [App\Http\Controllers\ReservationController::class, 'indexAdmin'])->name('reservation.admin.index');
        route::get('/reservation/admin/{reservation}/show', [App\Http\Controllers\ReservationController::class, 'show'])->name('reservation.admin.show');

      

Route::get('/filter-voyages', [VoyageController::class, 'filter'])->name('voyages.filter');

Route::get('/filter-multiple', [VoyageController::class, 'filter_sidebar'])->name('voyages.filtermultiple');
Route::get('/filter-search', [VoyageController::class, 'search'])->name('voyages.search');

    });





    // Reservation details
    Route::get('/client/reservations/{reservation?}', [App\Http\Controllers\Client\ReservationController::class, 'index'])->name('client.reservations.show');
    Route::post('/client/reservations', [App\Http\Controllers\Client\ReservationController::class, 'store'])->name('client.reservations.store');
    // Route::get('/client/reservations/{reservation}/edit', [ReservationController::class, 'edit'])->name('client.reservations.edit');
    // Route::patch('/client/reservations/{reservation}', [ReservationController::class, 'update'])->name('client.reservations.update');
    // Route::delete('/client/reservations/{reservation}', [ReservationController::class, 'destroy'])->name('client.reservations.destroy');

});



require __DIR__.'/auth.php';


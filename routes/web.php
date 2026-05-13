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
use App\Http\Controllers\ContactController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\AutocarEquipementController;

Route::get('/', function () {
    $voyages = Voyage::withCount('reservations')->get();
    return view('welcome',compact('voyages'));
})->name('home');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::get('/wishlist', [WishlistController::class, 'index'])->name('wishlist');
Route::post('/wishlist/toggle/{voyage}', [WishlistController::class, 'toggle'])->name('wishlist.toggle');

Route::get('/ex', function () {
    $v = Voyage::all();
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/voyages/list/', [VoyageController::class, 'listVoyages'])->name('voyages.list');

Route::get('/client/societes/{societe}/showVoyageSociete', [SocieteController::class, 'showVoyageSociete'])->name('client.societes.showVoyageSociete.index');


// Routes publiques pour le filtrage
Route::get('/filter-voyages', [VoyageController::class, 'filter'])->name('voyages.filter');
Route::get('/filter-multiple', [VoyageController::class, 'filter_sidebar'])->name('voyages.filtermultiple');
Route::get('/filter-search', [VoyageController::class, 'search'])->name('voyages.search');

Route::middleware('auth')->group(function () {
    // ======= Routes Client =======
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/detail/voyage', [VoyageController::class, 'detail'])->name('voyage.detail');
    Route::get('/recherche', [VoyageController::class, 'rechercher'])->name('voyages.rechercher');
    Route::get('/client/voyages', [VoyageController::class, 'clientIndex'])->name('voyages.client.index');

    // Réservations
    Route::get('/client/create/reservation', [App\Http\Controllers\Client\ReservationController::class, 'create'])->name('client.create.reservation');
    Route::post('/client/store', [App\Http\Controllers\Client\ReservationController::class, 'store'])->name('client.store');
    Route::get('/client/reservations/{reservation?}', [App\Http\Controllers\Client\ReservationController::class, 'index'])->name('client.reservations.show');
    Route::post('/client/reservations', [App\Http\Controllers\Client\ReservationController::class, 'store'])->name('client.reservations.store');

    // Tickets
    Route::get('/ticket/{id}', [App\Http\Controllers\Client\ReservationController::class, 'show'])->name('ticket.show');
    Route::get('/ticket/{id}/download', [App\Http\Controllers\Client\ReservationController::class, 'download'])->name('ticket.download');

    // Profil client
    Route::get('/client/profile/reservations', [App\Http\Controllers\Client\Profile\ReservationController::class, 'index'])->name('client.profile.reservations.index');
    Route::get('/client/profile/dashboard', [App\Http\Controllers\Client\Profile\DashboardController::class, 'index'])->name('client.profile.dashboard.index');
    Route::get('/client/profile/monprofile', [App\Http\Controllers\Client\Profile\MonprofileController::class, 'index'])->name('client.profile.monprofile.index');
    Route::get('/client/profile/parametres', [App\Http\Controllers\Client\Profile\ParametreController::class, 'index'])->name('client.profile.parametres.index');
    Route::put('/client/profile/parametres', [App\Http\Controllers\Client\Profile\ParametreController::class, 'update'])->name('client.profile.parametres.update');
    Route::get('/client/profile/parametres/dropprofileimage', [App\Http\Controllers\Client\Profile\ParametreController::class, 'removeprofileimage'])->name('client.profile.parametres.removeImage');
    Route::delete('/profile/delete-image', [App\Http\Controllers\Client\Profile\ParametreController::class, 'deleteProfileImage'])->name('profile.delete-image');

    // ======= Routes Admin =======
    Route::middleware('admin')->group(function () {
        Route::get('/admin', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin');
        Route::get('/admin/users', [App\Http\Controllers\Admin\UserController::class, 'index'])->name('admin.users.index');
        Route::get('/admin/clients', [App\Http\Controllers\Admin\UserController::class, 'clients'])->name('admin.clients.index');
        Route::get('/admin/users/create', [App\Http\Controllers\Admin\UserController::class, 'create'])->name('admin.users.create');
        Route::post('/admin/users', [App\Http\Controllers\Admin\UserController::class, 'store'])->name('admin.users.store');
        Route::get('/admin/users/{user}/edit', [App\Http\Controllers\Admin\UserController::class, 'edit'])->name('admin.users.edit');
        Route::put('/admin/users/{user}', [App\Http\Controllers\Admin\UserController::class, 'update'])->name('admin.users.update');
        Route::put('/admin/users/{user}/password', [App\Http\Controllers\Admin\UserController::class, 'updatePassword'])->name('admin.users.update-password');
        Route::delete('/admin/users/{user}', [App\Http\Controllers\Admin\UserController::class, 'destroy'])->name('admin.users.destroy');
        Route::get('/admin/roles/create', [App\Http\Controllers\Admin\RoleController::class, 'create'])->name('admin.roles.create');
        Route::post('/admin/roles', [App\Http\Controllers\Admin\RoleController::class, 'store'])->name('admin.roles.store');
        Route::get('/admin/roles/{role}/edit', [App\Http\Controllers\Admin\RoleController::class, 'edit'])->name('admin.roles.edit');
        Route::put('/admin/roles/{role}', [App\Http\Controllers\Admin\RoleController::class, 'update'])->name('admin.roles.update');
        Route::delete('/admin/roles/{role}', [App\Http\Controllers\Admin\RoleController::class, 'destroy'])->name('admin.roles.destroy');

        // Resources
        Route::resource('autocars', AutocarController::class);
        Route::resource('societes', SocieteController::class);
        Route::resource('voyages', VoyageController::class);
        Route::resource('villes', VilleController::class);
        Route::resource('type_voyages', TypeVoyageController::class);
        Route::resource('modeReglements', ModeReglementController::class);
        Route::resource('autocaroptions', AutocarOptionController::class);
        Route::resource('autocarequipements', AutocarEquipementController::class);
        Route::resource('options', OptionController::class);
        Route::resource('equipements', EquipementController::class);

        // Réservations admin
        Route::get('/reservation/admin/list', [App\Http\Controllers\ReservationController::class, 'indexAdmin'])->name('reservation.admin.index');
        Route::get('/reservation/admin/{reservation}/show', [App\Http\Controllers\ReservationController::class, 'show'])->name('reservation.admin.show');
    });
});

require __DIR__.'/auth.php';


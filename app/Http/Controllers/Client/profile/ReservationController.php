<?php

namespace App\Http\Controllers\Client\Profile;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreReservationRequest;
use App\Models\autocar;
use App\Models\Mode_reglement;
use App\Models\Reservation;
use App\Models\TypeVoyage;
use App\Models\Ville;
use App\Models\Voyage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReservationController extends Controller
{

    public function index(){
        $reservations = Reservation::where("user_id", auth()->user()->id)->get();
        return view('client.profile.reservations.index', compact('reservations'));
    }

}

<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\autocar;
use App\Models\Mode_reglement;
use App\Models\Reservation;
use App\Models\TypeVoyage;
use App\Models\Ville;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function create(Request $request){
        // dd($request);
        $villes = Ville::all();
        $type_voyages = TypeVoyage::all();
        // dd($type_voyages);
        $autocars = autocar::all();
        $mode_reglements = Mode_reglement::all();
        return view('client.reservations.create',compact('villes','type_voyages','autocars','mode_reglements'));
    }
    public function store(Request $request)
    {
        Reservation::create($request->all());
    }
}

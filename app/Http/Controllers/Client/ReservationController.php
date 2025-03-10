<?php

namespace App\Http\Controllers\Client;

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
    public function create(Request $request){
        $SelectedVoyage = DB::table('voyages')->find(1); //replace 1 by voyage id selected
        // dd($SelectedVoyage);

        $autocar = DB::table('autocars')->find($SelectedVoyage->autocar_id);
        // dd($autocar->image); 


        $v_d = DB::table('villes')->find($SelectedVoyage->ville_depart_id); 
        $v_a = DB::table('villes')->find($SelectedVoyage->ville_arrivee_id); 
        // dd($voyage);
        $villes = Ville::all();
        $type_voyages = TypeVoyage::all();
        // dd($type_voyages);
        $autocars = autocar::all();
        $mode_reglements = Mode_reglement::all();
        return view('client.reservations.create',compact('villes','type_voyages','autocars','mode_reglements','SelectedVoyage','v_d','v_a','autocar'));
    }
    public function store(StoreReservationRequest $request)
    {
        // $pr = $request->prix * $request->num_siege;
        // $request->validate(
        //     ['num_siege'=>'required|integer|min:1|max:30'],
        //     // ['num_siege.max'=>'required|min:1|max:30']
        // );
        $request->validated();
        // dd($request->all());
        Reservation::create($request->all());
        return redirect()->route('dashboard')->with('success',"reservation ajouter avec succe");

    }
}

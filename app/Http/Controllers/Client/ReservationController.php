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
    public function index($id)
    {
        $voyage=Voyage::find($id);
        return view('client.reservations.index', compact('voyage'));
    }
    public function create(Request $request){
        $SelectedVoyage = DB::table('voyages')->find(6); //replace 1 by voyage id selected
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
    // public function store(StoreReservationRequest $request)
    // {
    //     // $pr = $request->prix * $request->num_siege;
    //     // $request->validate(
    //     //     ['num_siege'=>'required|integer|min:1|max:30'],
    //     //     // ['num_siege.max'=>'required|min:1|max:30']
    //     // );
    //     $request->validated();
    //     // dd($request->all());
    //     Reservation::create($request->all());
    //     return redirect()->route('dashboard')->with('success',"reservation ajouter avec succe");

    // }
    public function store(Request $request)
    {
        // dd($request->all());
        // 1) Find the Voyage
        $voyage = Voyage::findOrFail($request->voyage_id);

        try {
            DB::beginTransaction();

            

            // 2) Create a Reservation
            //    - Map columns from $voyage
            //    - Use the first seat from $request->seats[0] (or loop if multiple)
            $reservation = Reservation::create([
                'num_siege'         => $request->seats[0],
                'user_id'           => auth()->user()->id,
                'mode_reglement_id' => $request->mode_reglement_id,

                // If you want to store today's date for the reservation:
                'date_reservation'  => now(),  // or Carbon::now()->toDateString()

                // Pulling columns from $voyage
                'date_depart'       => $voyage->date_depart,
                'date_arrivee'      => $voyage->date_arrivee,
                'heure_depart'      => $voyage->heure_depart,
                'heure_arrivee'     => $voyage->heure_arrivee,
                'ville_depart_id'   => $voyage->ville_depart_id,
                'ville_arrivee_id'  => $voyage->ville_arrivee_id,
                'autocar_id'        => $voyage->autocar_id,
                'type_voyage_id'    => $voyage->type_voyage_id,
                'prix'              => $voyage->prix,
                'frais'             => 0,
                'voyage_id'         => $voyage->id,
                // If your reservations table has 'frais', set it as needed
                // 'frais'          => 0,
            ]);

            DB::commit();
            // Redirect or return a success response
            return redirect()->back()->with('success', 'Reservation created successfully!');
        } catch (\Exception $e) {
            DB::rollBack();
            dd($e->getMessage());
            // Handle the error as you wish
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}

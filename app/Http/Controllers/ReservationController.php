<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Http\Requests\StoreReservationRequest;
use App\Http\Requests\UpdateReservationRequest;
use App\Models\Voyage;
// use GuzzleHttp\Psr7\Request;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function indexAdmin()
    {
        $reservations=Reservation::paginate(10);
        return view('admin.reservations.index', compact('reservations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return view('client.reservations.create');
    }

    /**
     * Store a newly created resource in storage.
     */

    // ...

    public function store(Request $request)
    {
        dd($request->all());
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


    /**
     * Display the specified resource.
     */
    public function show(Reservation $reservation)
    {
        return view('admin.reservations.show', compact('reservation'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reservation $reservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateReservationRequest $request, Reservation $reservation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reservation $reservation)
    {
        //
    }
}

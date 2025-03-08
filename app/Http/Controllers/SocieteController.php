<?php

namespace App\Http\Controllers;

use App\Models\Societe;
use App\Http\Requests\StoreSocieteRequest;
use App\Http\Requests\UpdateSocieteRequest;
use Illuminate\Support\Facades\DB;

class SocieteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $societes = Societe::paginate(10);
        return view('admin.societes.index', compact('societes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.societes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSocieteRequest $request)
    {
        $formFields = $request->validated();

        if ($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('societes', 'public');
        }
        Societe::create($formFields);

        return redirect()->route("societes.index")->with("success", "votre societe est bien crée");
    }

    /**
     * Display the specified resource.
     */
    public function show(Societe $societe)
    {
        return view('admin.societes.show', compact('societe'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Societe $societe)
    {
        return view('admin.societes.edit', compact('societe'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSocieteRequest $request, Societe $societe)
    {
        $formFields = $request->validated();

        if ($request->hasFile('logo')) {


            $formFields['logo'] = $request->file('logo')->store('societes', 'public');
        }
        $societe->update($formFields);

        return redirect()->route("societes.index")->with("success", "votre societe est bien modifier");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Societe $societe)
    {
        $societe->delete();
        return redirect()->route("societes.index")->with("success", "votre societe est bien supprimer");
    }
    public function showVoyageSociete(Societe $societe)
    {
        $voyages = DB::table('societes as s')
            ->join('autocars as a', 's.id', '=', 'a.societe_id')
            ->join('voyages as v', 'a.id', '=', 'v.autocar_id')
            ->join('villes as vd', 'v.ville_depart_id', '=', 'vd.id')
            ->join('villes as va', 'v.ville_arrivee_id', '=', 'va.id')
            ->join('type_voyages as tv', 'v.type_voyage_id', '=', 'tv.id')
            ->select(
                's.*', // Select all columns from societes table
                'a.*', // Select all columns from autocars table
                'v.*', // Select all columns from voyages table
                'vd.ville as departure_city',
                'va.ville as arrival_city',
                'tv.*' // Select all columns from type_voyages table
            )
            ->where('s.id', $societe->id) // Ensuring only voyages for the given societe are fetched
            ->get();

        return view('client.societes.showVoyageSociete.index', compact('societe', 'voyages'));
    }





}

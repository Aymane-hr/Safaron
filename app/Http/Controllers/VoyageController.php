<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Voyage;
use App\Models\Ville;
use App\Http\Requests\StoreVoyageRequest;
use App\Http\Requests\UpdateVoyageRequest;

class VoyageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $voyages = Voyage::paginate(10);
        return view('admin.voyages.index', compact('voyages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.voyages.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreVoyageRequest $request)
    {
        $formFields = $request->validated();

        Voyage::create($formFields);

        return redirect()->route("voyages.index")->with("success", "Votre voyage a été créé avec succès.");
    }

    /**
     * Display the specified resource.
     */
    public function show(Voyage $voyage)
    {
        return view('admin.voyages.show', compact('voyage'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Voyage $voyage)
    {
        return view('admin.voyages.edit', compact('voyage'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateVoyageRequest $request, Voyage $voyage)
    {
        $formFields = $request->validated();

        $voyage->update($formFields);

        return redirect()->route("voyages.index")->with("update", "Votre voyage a été modifié avec succès.");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Voyage $voyage)
    {
        $voyage->delete();
        return redirect()->route("voyages.index")->with("destroy", "Votre voyage a été supprimé avec succès.");
    }
    public function rechercher(Request $request)
{
    // dd($request->all());
    // $voyages = Voyage::query();

    $voyages=Voyage::where(function($query) use ($request){
        $query->where('ville_depart_id', $request->ville_depart_id)
        ->where('ville_arrivee_id', $request->ville_arrivee_id)
        ->where('date_depart', $request->date_depart)
        ->where('date_arrivee', $request->date_arrivee);
    })->get();



    // Filtrer par ville de départ
    // if ($request->filled('ville_depart_id')) {
    //     $voyages->where('ville_depart_id', $request->ville_depart_id);
    // }



    // // Filtrer par ville d’arrivée
    // if ($request->filled('ville_arrivee_id')) {
    //     $voyages->where('ville_arrivee_id', $request->ville_arrivee_id);
    // }

    // // Filtrer par date de départ
    // if ($request->filled('date_depart')) {
    //     $voyages->whereDate('date_depart', $request->date_depart);
    // }

    // // Filtrer par date d’arrivée
    // if ($request->filled('date_arrivee')) {
    //     $voyages->whereDate('date_arrivee', $request->date_arrivee);
    // }

    // Vérifier s'il y a assez de places disponibles
    // if ($request->filled('nombre_personnes')) {
    //     $voyages->whereHas('autocar', function ($query) use ($request) {
    //         $query->where('nbr_siege', '>=', $request->nombre_personnes);
    //     });
    // }

    // Exécuter la requête et récupérer les résultats
    // $voyages = $voyages->get();
    $villes = Ville::all();

    return view('client.voyages.listevoyage', compact('voyages'));
} 
}

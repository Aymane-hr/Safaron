<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Voyage;
use App\Models\Ville;
use App\Http\Requests\StoreVoyageRequest;
use App\Http\Requests\UpdateVoyageRequest;

class VoyageController extends Controller
{
    public function listVoyages()
    {
        $villes = Ville::all();
        $voyages = Voyage::paginate(8);
        return view('client.voyages.listevoyage', compact('villes', 'voyages'));
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $voyages = Voyage::paginate(3);
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

    public function filter(Request $request)
    {
        $query = Voyage::query();

        // Filter by departure city
        if ($request->filled('ville_depart')) {
            $query->where('ville_depart_id', $request->ville_depart);
        }

        // Filter by arrival city
        if ($request->filled('ville_arrivee')) {
            $query->where('ville_arrivee_id', $request->ville_arrivee);
        }

        // Filter by departure date
        if ($request->filled('date_depart')) {
            $query->whereDate('date_depart', $request->date_depart);
        }

        // Filter by options
        if ($request->has('options') && is_array($request->options) && count($request->options) > 0) {
            $query->whereHas('autocar.options', function($q) use ($request) {
                $q->whereIn('options.id', $request->options);
            });
        }

        $voyages = $query->get();

        return response()->json([
            'voyages' => view('client.voyages.partials.list-voyage', compact('voyages'))->render()
        ]);
    }

    public function filter_sidebar(Request $request)
    {
        $query = Voyage::query();

        // dd($request->all(),$request->has('type_voyages') && count($request->type_voyages) > 0);


        if ($request->has('type_voyages') && count($request->type_voyages) > 0) {
            $query->whereIn('type_voyage_id', $request->type_voyages);
        }
        if ($request->has('societes') && count($request->societes) > 0) {
            $query->whereHas('autocar', function ($q) use ($request) {
                $q->whereIn('societe_id', $request->societes);
            });
        }

        if ($request->has('equipements') && count($request->equipements) > 0) {
            $query->whereHas('autocar.equipements', function ($q) use ($request) {
                $q->whereIn('equipements.id', $request->equipements);
            });
        }
        $voyages = $query->get();


        return response()->json([
            'voyages' => view('client.voyages.partials.list-voyage', compact('voyages'))->render()
        ]);
    }

    public function search(Request $request)
    {
        $query = Voyage::query();

        // dd($request->all());


        if ($request->has('societes')) {
            $query->whereHas('autocar.societe', function ($q) use ($request) {
                $q->where('raison_social', 'like', '%' . $request->societes . '%');
            });
        }
        $voyages = $query->get();
        return response()->json([
            'voyages' => view('client.voyages.partials.list-voyage', compact('voyages'))->render()
        ]);
    }
    public function clientIndex(Request $request)
    {
        $query = Voyage::query();

        if ($request->filled('ville_depart')) {
            $query->where('ville_depart_id', $request->ville_depart);
        }

        if ($request->filled('ville_arrivee')) {
            $query->where('ville_arrivee_id', $request->ville_arrivee);
        }

        if ($request->filled('date_depart')) {
            $query->whereDate('date_depart', $request->date_depart);
        }

        $voyages = $query->paginate(10);

        return view('client.voyages.listevoyage', [
            'voyages' => $voyages,
            'villes' => Ville::all(),
        ]);
    }
}


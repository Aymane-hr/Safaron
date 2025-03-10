<?php

namespace App\Http\Controllers;

use App\Models\Voyage;
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
}

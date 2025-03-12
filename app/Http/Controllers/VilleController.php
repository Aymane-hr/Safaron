<?php

namespace App\Http\Controllers;

use App\Models\Ville;
use Illuminate\Http\Request;

class VilleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $villes = Ville::all();
        return view('admin.villes.index', compact('villes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("admin.villes.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'ville' => 'required|regex:/^[^\d]+$/',
        ]);

        Ville::create($request->all());
        return redirect()->route('villes.index')->with('success', 'Ville ajoutée avec succès');

    }

    /**
     * Display the specified resource.
     */
    public function show(Ville $ville)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ville $ville)
    {
        //
        return view('admin.villes.edit', compact('ville'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ville $ville)
    {
        //
        $request->validate([
            'ville' => 'required|regex:/^[^\d]+$/',
        ]);
        $ville->update($request->all());
        return redirect()->route('villes.index')->with('success', 'Ville modifiée avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ville $ville)
    {
        //
        $ville->delete();
        return redirect()->route('villes.index');
    }
}

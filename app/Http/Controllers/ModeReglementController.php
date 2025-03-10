<?php

namespace App\Http\Controllers;
<<<<<<< HEAD

use App\Models\Mode_reglement;
use Illuminate\Http\Request;

=======
use Illuminate\Http\Request;
use App\Http\Requests\ModeReglementRequest;
use App\Models\ModeReglement;
>>>>>>> c42f10c8a1d0a92c9fea25c08874ae56a49aad44
class ModeReglementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
<<<<<<< HEAD
        //
=======
        $modes = ModeReglement::all();
        return view('admin.modeReglements.index', compact('modes'));
>>>>>>> c42f10c8a1d0a92c9fea25c08874ae56a49aad44
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
<<<<<<< HEAD
        //
=======
        return view('admin.modeReglements.create');
>>>>>>> c42f10c8a1d0a92c9fea25c08874ae56a49aad44
    }

    /**
     * Store a newly created resource in storage.
     */
<<<<<<< HEAD
    public function store(Request $request)
    {
        //
=======
    public function store(ModeReglementRequest $request)
    {
        ModeReglement::create([
            'mode_reglement' => $request->mode_reglement,
        ]);
        return redirect()->route('modeReglements.index');
>>>>>>> c42f10c8a1d0a92c9fea25c08874ae56a49aad44
    }

    /**
     * Display the specified resource.
     */
<<<<<<< HEAD
    public function show(Mode_reglement $mode_reglement)
=======
    public function show(string $id)
>>>>>>> c42f10c8a1d0a92c9fea25c08874ae56a49aad44
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
<<<<<<< HEAD
    public function edit(Mode_reglement $mode_reglement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mode_reglement $mode_reglement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mode_reglement $mode_reglement)
    {
        //
    }
=======
    public function edit(ModeReglement $modeReglement)
    {
        $mode = $modeReglement;
        //dd($mode);
    return view('admin.modeReglements.edit', compact('mode'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(ModeReglementRequest $request, ModeReglement $modeReglement)
    {
        // $request->validate([
        //     'mode_reglement' => 'required|regex:/^[a-zA-Z]+$/|max:255|min:3',['mode_reglement.min'=>'mode de reglement sgiiiir ']
        // ]);

    //dd($request->all());

    $modeReglement->update([
        'mode_reglement' => $request->mode_reglement,
    ]);

    return redirect()->route('modeReglements.index');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ModeReglement $modeReglement)
    {
    $modeReglement->delete();
    return redirect()->route('modeReglements.index')->with('success', 'Mode de règlement supprimé avec succès.');
    }


>>>>>>> c42f10c8a1d0a92c9fea25c08874ae56a49aad44
}

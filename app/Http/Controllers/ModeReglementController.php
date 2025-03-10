<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\ModeReglementRequest;
use App\Models\ModeReglement;
class ModeReglementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $modes = ModeReglement::all();
        return view('admin.modeReglements.index', compact('modes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.modeReglements.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ModeReglementRequest $request)
    {
        ModeReglement::create([
            'mode_reglement' => $request->mode_reglement,
        ]);
        return redirect()->route('modeReglements.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
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


}

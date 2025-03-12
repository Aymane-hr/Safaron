<?php

namespace App\Http\Controllers;

use App\Models\AutocarEquipement;
use App\Http\Requests\AutocarEquipementRequest;
use App\Models\Autocar;
use App\Models\Option;
use App\Models\Equipement;
use App\Models\AutocarOption;

use Illuminate\Support\Facades\DB;

class AutocarEquipementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $autocarequipements = AutocarEquipement::paginate(10);
        return view('admin.autocarequipements.index', compact('autocarequipements'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $autocars = Autocar::all();
        $equipements = Equipement::all();

        return view('admin.autocarequipements.create', compact('autocars', 'equipements'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AutocarEquipementRequest $request)
    {
        $formFields = $request->validated();

        if ($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('autocarequipements', 'public');
        }
        AutocarEquipement::create($formFields);

        return redirect()->route("autocarequipements.index")->with("success", "votre autocarequipement est bien crée");
    }

    /**
     * Display the specified resource.
     */
    public function show(AutocarEquipement $autocarequipement)
    {
        return view('admin.autocarequipements.show', compact('autocarequipement'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AutocarEquipement $autocarequipement)
    {
        $autocars = Autocar::all();
        $equipements = Equipement::all();


        return view('admin.autocarequipements.edit', compact('autocarequipement', 'autocars', 'equipements'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AutocarEquipementRequest $request, AutocarEquipement $autocarequipement)
    {
        $formFields = $request->validated();

        if ($request->hasFile('logo')) {


            $formFields['logo'] = $request->file('logo')->store('autocarequipements', 'public');
        }
        $autocarequipement->update($formFields);

        return redirect()->route("autocarequipements.index")->with("success", "votre autocarequipement est bien modifier");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AutocarEquipement $autocarequipement)
    {
        $autocarequipement->delete();
        return redirect()->route("autocarequipements.index")->with("success", "votre autocarequipement est bien supprimer");
    }
  



}

<?php

namespace App\Http\Controllers;

use App\Models\Equipement;
use App\Http\Requests\EquipementRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException;

class EquipementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $equipements = Equipement::paginate(10);
        return view('admin.equipements.index', compact('equipements'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.equipements.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EquipementRequest $request)
    {
        $formFields = $request->validated();

        if ($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('equipements', 'public');
        }
        Equipement::create($formFields);

        return redirect()->route("equipements.index")->with("success", "votre equipement est bien crée");
    }

    /**
     * Display the specified resource.
     */
    public function show(Equipement $equipement)
    {
        return view('admin.equipements.show', compact('equipement'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Equipement $equipement)
    {
        return view('admin.equipements.edit', compact('equipement'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EquipementRequest $request, Equipement $equipement)
    {
        $formFields = $request->validated();

        if ($request->hasFile('logo')) {


            $formFields['logo'] = $request->file('logo')->store('equipements', 'public');
        }
        $equipement->update($formFields);

        return redirect()->route("equipements.index")->with("success", "votre equipement est bien modifier");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Equipement $equipement)
    {
        try {
            $equipement->delete();
            return redirect()->route("equipements.index")->with("success", "votre equipement est bien supprimer");
        } catch (QueryException $e) {
            if ($e->getCode() == "23000") {
                return redirect()->route("equipements.index")->with("error", "Impossible de supprimer cet équipement car il est lié à d'autres données.");
            }

            return redirect()->route("equipements.index")->with("error", "Une erreur s'est produite lors de la suppression.");
        }
    }






}

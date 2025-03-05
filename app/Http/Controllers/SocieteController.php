<?php

namespace App\Http\Controllers;

use App\Models\Societe;
use App\Http\Requests\StoreSocieteRequest;
use App\Http\Requests\UpdateSocieteRequest;

class SocieteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $societes = Societe::paginate();
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

        return redirect()->route("admin.societes.index")->with("success", "votre societe est bien crée");
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

        return redirect()->route("admin.societes.index")->with("update", "votre societe est bien modifier");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Societe $societe)
    {
        $societe->delete();
        return redirect()->route("admin.societes.index")->with("destroy", "votre societe est bien supprimer");
    }
}

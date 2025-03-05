<?php

namespace App\Http\Controllers;

use App\Models\autocar;
use App\Http\Requests\StoreautocarRequest;
use App\Http\Requests\UpdateautocarRequest;

class AutocarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $autocars = autocar::paginate(10);
        return view('autocars.index', compact('autocars'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('autocars.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreautocarRequest $request)
    {
        $formFields = $request->validated();

        // Handle file upload if there's a file in the request
        if ($request->hasFile('image')) {
            $formFields['image'] = $request->file('image')->store('autocars', 'public');
        }

        Autocar::create($formFields);

        return redirect()->route("autocars.index")->with("success", "Votre autocar a été créé avec succès.");
    }

    /**
     * Display the specified resource.
     */
    public function show(autocar $autocar)
    {
        return view('autocars.show', compact('autocar'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(autocar $autocar)
    {
        return view('autocars.edit', compact('autocar'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateautocarRequest $request, autocar $autocar)
    {

        $formFields = $request->validated();

        // Handle file upload if there's a file in the request
        if ($request->hasFile('image')) {
            $formFields['image'] = $request->file('image')->store('autocars', 'public');
        }

        $autocar->update($formFields);

        return redirect()->route("autocars.index")->with("update", "Votre autocar a été modifié avec succès.");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(autocar $autocar)
    {
        $autocar->delete();
        return redirect()->route("autocars.index")->with("destroy", "Votre autocar a été supprimé avec succès.");
    }
}

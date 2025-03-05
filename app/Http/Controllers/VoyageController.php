<?php

namespace App\Http\Controllers;

use App\Models\Voyage;
use Illuminate\Http\Request;

class VoyageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $voyages=Voyage::all();
        return view('voyages.index',compact('voyages'));
  
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('voyages.create');
   
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Voyage::create($request->all());
        return redirect()->route('voyages.index');
    
    }

    /**
     * Display the specified resource.
     */
    public function show(Voyage $voyage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Voyage $voyage)
    {
        return view('voyages.edit',compact('voyage'));
   
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Voyage $voyage)
    {
        $voyage->update($request->all());
        return redirect()->route('voyages.index');
   
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Voyage $voyage)
    {
        $voyage->delete();
        return redirect()->route('voyages.index');
    }
}
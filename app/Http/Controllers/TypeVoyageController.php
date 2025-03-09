<?php
namespace App\Http\Controllers;

use App\Models\TypeVoyage;
use Illuminate\Http\Request;
use App\Http\Requests\TypeVoyageRequest;


class TypeVoyageController extends Controller
{
    public function index()
    {
        $types = TypeVoyage::all();
        return view('admin.type_voyages.index', compact('types'));
    }

    public function create()
    {
        return view('admin.type_voyages.create');
    }
    public function store(TypeVoyageRequest $request)
    {
        // $request->validate(['type_voyage' => 'required|string|max:255|min:3'],);
        TypeVoyage::create($request->all());
    
        return redirect()->route('type_voyages.index')->with('success', 'Type ajouté avec succès');
    }
    

    public function edit(TypeVoyage $type_voyage)
    {
        return view('admin.type_voyages.edit', compact('type_voyage'));
    }
    
    public function update(TypeVoyageRequest $request, TypeVoyage $type_voyage)
    {
        // $request->validate(['type_voyage' => 'required|string|max:255|min:3'],['type_voyage.min' => '   3 mot']);
        $type_voyage->update($request->all());
    
        return redirect()->route('type_voyages.index')->with('success', 'Type modifié avec succès');
    }
    

    public function destroy(TypeVoyage $type_voyage)
    {
        $type_voyage->delete();
        return redirect()->route('type_voyages.index')->with('success', 'Type supprimé avec succès');
    }
}
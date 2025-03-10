<?php

namespace App\Http\Controllers;

use App\Models\AutocarOption;
use App\Http\Requests\AutocarOptionRequest;
use App\Models\Autocar;
use App\Models\Option;

use Illuminate\Support\Facades\DB;

class AutocarOptionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $autocaroptions = AutocarOption::paginate(10);
        return view('admin.autocaroptions.index', compact('autocaroptions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $autocars = Autocar::all();
        $options = Option::all();
        return view('admin.autocaroptions.create', compact('autocars', 'options'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AutocarOptionRequest $request)
    {
        $formFields = $request->validated();

        if ($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('autocaroptions', 'public');
        }
        AutocarOption::create($formFields);

        return redirect()->route("autocaroptions.index")->with("success", "votre autocaroption est bien crée");
    }

    /**
     * Display the specified resource.
     */
    public function show(AutocarOption $autocaroption)
    {
        return view('admin.autocaroptions.show', compact('autocaroption'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AutocarOption $autocaroption)
    {
        $autocars = Autocar::all();
        $options = Option::all();
        return view('admin.autocaroptions.edit', compact('autocaroption', 'autocars', 'options'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AutocarOptionRequest $request, AutocarOption $autocaroption)
    {
        $formFields = $request->validated();

        if ($request->hasFile('logo')) {


            $formFields['logo'] = $request->file('logo')->store('autocaroptions', 'public');
        }
        $autocaroption->update($formFields);

        return redirect()->route("autocaroptions.index")->with("success", "votre autocaroption est bien modifier");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AutocarOption $autocaroption)
    {
        $autocaroption->delete();
        return redirect()->route("autocaroptions.index")->with("success", "votre autocaroption est bien supprimer");
    }
  




}

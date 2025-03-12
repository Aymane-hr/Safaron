<?php

namespace App\Http\Controllers;

use App\Models\Option;
use App\Http\Requests\OptionRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException;

class OptionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $options = Option::paginate(10);
        return view('admin.options.index', compact('options'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.options.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(OptionRequest $request)
    {
        $formFields = $request->validated();

        if ($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('options', 'public');
        }
        Option::create($formFields);

        return redirect()->route("options.index")->with("success", "Votre option est bien créée.");
    }

    /**
     * Display the specified resource.
     */
    public function show(Option $option)
    {
        return view('admin.options.show', compact('option'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Option $option)
    {
        return view('admin.options.edit', compact('option'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(OptionRequest $request, Option $option)
    {
        $formFields = $request->validated();

        if ($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('options', 'public');
        }
        $option->update($formFields);

        return redirect()->route("options.index")->with("success", "Votre option est bien modifiée.");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Option $option)
    {
        try {
            $option->delete();
            return redirect()->route("options.index")->with("success", "Votre option est bien supprimée.");
        } catch (QueryException $e) {
            if ($e->getCode() == "23000") {
                               return redirect()->route("options.index")->with("error", "Impossible de supprimer cette option car elle est liée à d'autres données.");
            }

            return redirect()->route("options.index")->with("error", "Une erreur s'est produite lors de la suppression.");
        }
    }
}

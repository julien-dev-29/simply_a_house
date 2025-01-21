<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\OptionFormRequest;
use App\Models\Option;
use App\Http\Controllers\Controller;

class OptionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.option.index', [
            'options' => Option::paginate(25)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.option.create', [
            'option' => new Option()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(OptionFormRequest $request)
    {
        $Option = Option::create($request->validated());
        return to_route('admin.option.index')->with('success', 'L\'option a été créée avec succès');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Option $Option)
    {
        return view('admin.option.create', [
            'option' => $Option
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(OptionFormRequest $request, Option $Option)
    {
        $Option->update($request->validated());
        return to_route('admin.option.index')->with('success', 'L\'option a été modifiée avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Option $Option)
    {
        $Option->delete();
        return to_route('admin.option.index')->with('success', 'L\'option a été supprimée avec succès');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PropertyFormRequest;
use App\Models\Option;
use App\Models\Property;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.property.index', [
            'properties' => Property::orderBy('created_at', 'DESC')->paginate(25)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $property = new Property();
        $property->fill([
            'surface' => 40,
            'rooms' => 5,
            'bedrooms' => 2,
            'floor' => 0,
            'city' => 'Quimper',
            'postal_code' => 29000,
            'sold' => false
        ]);
        return view('admin.property.create', [
            'property' => $property,
            'options' => Option::pluck('name', 'id')
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PropertyFormRequest $request)
    {
        $property = Property::create($request->validated());
        $property->options()->sync($request->validated('options'));
        $property->attachFiles($request->validated('pictures'));
        return to_route('admin.property.index')->with('success', 'le bien a été créé avec succes');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Property $property)
    {
        return view('admin.property.create', [
            'property' => $property,
            'options' => Option::pluck('name', 'id')
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PropertyFormRequest $request, Property $property)
    {
        $property->update($request->validated());
        $property->options()->sync($request->validated('options'));
        $property->attachFiles($request->validated('pictures'));

        return to_route('admin.property.index')->with('success', 'Le bien a été modifié avec succes');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Property $property)
    {
        $property->delete();
        return to_route('admin.property.index')->with('success', 'le bien a été supprimé avec succes');
    }
}

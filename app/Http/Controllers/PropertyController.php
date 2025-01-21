<?php

namespace App\Http\Controllers;

use App\Http\Requests\SearchPropertiesRequest;
use App\Models\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function index(SearchPropertiesRequest $request)
    {
        $query = Property::query()->orderBy('created_at', 'desc');

        if ($price = $request->validated('price')) {
            $query = $query->where(column: 'price', operator: '<=', value: $price);
        }
        if ($surface = $request->validated('surface')) {
            $query = $query->where(column: 'surface', operator: '>=', value: $surface);
        }
        if ($rooms = $request->validated('rooms')) {
            $query = $query->where(column: 'rooms', operator: '>=', value: $rooms);
        }
        if ($title = $request->validated('title')) {
            $query = $query->where(column: 'title', operator: 'like', value: "%{$title}%");
        }
        return view('property.index', [
            'properties' => $query->paginate(16),
            'validated' => $request->validated()
        ]);
    }

    public function show(string $slug, Property $property)
    {
        if ($slug !== $property->getSlug()) {
            return to_route('properties.show', [
                'slug' => $property->getSlug(),
                'property' => $property
            ]);
        }
        return view('property.show', [
            'property' => $property
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Property;

/**
 * Summary of HomeController
 */
class HomeController extends Controller
{
    /**
     * Summary of index
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $properties = Property::orderBy('created_at', 'desc')->limit(4)->get();
        return view('home', [
            'properties' => $properties
        ]);
    }
}

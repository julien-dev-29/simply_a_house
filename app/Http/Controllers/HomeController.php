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
        $properties = Property::orderBy('created_at', 'desc')->limit(3)->get();
        return view('home', [
            'properties' => $properties
        ]);
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }
}

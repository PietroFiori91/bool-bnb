<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Apartment;
use Illuminate\Http\Request;

class ApartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $apartments = Apartment::all();

        // indirizza i nostri dati alla view index 
        return view("apartment.index", ["apartments" => $apartments]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('apartment.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([

            'name' => 'required|string',
            'address' => "required|string",
            'description' => 'required|string',
            'room' => 'required|integer',
            'bed' => 'required|integer',
            'bathroom' => 'required|integer',
            'mq' => 'required|integer',
            'latitude' => 'required|string|max:20',
            'longitude' => 'required|string|max:20',
            'visibility' => 'required|boolean',
            'availability' => 'required|boolean'
        ]);
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('apartment.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function showMap()
    {
        return view('apartment.map');
    }
}

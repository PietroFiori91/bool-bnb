<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Apartment;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ApartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $apartments = Apartment::all();

        // indirizza i nostri dati alla view index 
        return view("admin.apartments.index", ["apartments" => $apartments]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.apartments.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'address' => 'required|string',
            'room' => 'required|integer',
            'bed' => 'required|integer',
            'bathroom' => 'required|integer',
            'mq' => 'required|numeric',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
            'visibility' => 'nullable|boolean',
            'availability' => 'nullable|boolean'
        ]);

        $newApartment = new Apartment();
        $newApartment->fill($data);
        $newApartment->save();

        return redirect()->route("admin.apartments.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $apartment = Apartment::findOrFail($id);
        return view("admin.apartments.show", compact("apartment"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $apartment = Apartment::findOrFail($id);
        return view('admin.apartments.edit',  ['apartments' => $apartment]);


        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $apartment = Apartment::findOrFail($id);
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'address' => 'required|string',
            'room' => 'required|integer',
            'bed' => 'required|integer',
            'bathroom' => 'required|integer',
            'mq' => 'required|numeric',
            'latitude' => 'required|string',
            'longitude' => 'required|string',
            'visibility' => [
                'required',
                Rule::in(['1', '0'])
            ],
            'availability' => [
                'required',
                Rule::in(['1', '0'])
            ],
        ]);

        $apartment->update($data);
        return redirect()->route("admin.apartments.show", $apartment->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $apartment = Apartment::findOrFail($id);
        $apartment->delete();

        return redirect()->route('admin.apartments.index')
            ->with('success', 'Appartamento eliminato con successo!');
    }
}

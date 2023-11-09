<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Apartment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use App\Models\Service;
use Illuminate\Support\Facades\Storage;

class ApartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $apartments = $user->apartments;
        $apartments = Apartment::all();
        $services = Service::all();

        // indirizza i nostri dati alla view index
        return view("admin.apartments.index", ["apartments" => $apartments], ['services' => $services]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $apartment = new Apartment();
        $services = Service::all();

        return view('admin.apartments.create', ["apartment" => $apartment, 'services' => $services]);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'images' => 'nullable|image|max:6000',
            'description' => 'required|string',
            'address' => 'required|string',
            'room' => 'required|integer',
            'bed' => 'required|integer',
            'bathroom' => 'required|integer',
            'mq' => 'required|numeric',
            'latitude' => 'required|string',
            'longitude' => 'required|string',
            'visibility' => 'nullable|boolean',
            'availability' => 'nullable|boolean',
            'services' => 'required|min:1',
        ]);
    
        $currentUser = Auth::user();
        $data["user_id"] = $currentUser->id;
    
        $newApartment = new Apartment();
        $newApartment->fill($data);
        $newApartment->save();
    
        // Salva il percorso dell'immagine dopo aver salvato l'appartamento
        if ($request->has('images')) {
            $images_path = Storage::put('apartments', $data['images']);
            $newApartment->update(['images' => $images_path]);
        }
    
        if (key_exists('services', $data)) {
            $newApartment->services()->sync($data['services']);
        }
    
        return redirect()->route("admin.apartments.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $apartment = Apartment::findOrFail($id);
        $services = Service::all();
        return view("admin.apartments.show",  ['apartments' => $apartment, 'services' => $services]);
    }
    // compact("apartment" , 'services')
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $apartment = Apartment::findOrFail($id);
        $services = Service::all();

        return view('admin.apartments.edit',  ['apartments' => $apartment, 'services' => $services]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'images' => 'nullable|image|max:6000',
            'description' => 'required|string',
            'address' => 'required|string',
            'room' => 'required|integer',
            'bed' => 'required|integer',
            'bathroom' => 'required|integer',
            'mq' => 'required|numeric',
            'latitude' => 'required|string',
            'longitude' => 'required|string',
            'services' => 'required|min:1',
            'visibility' => [
                'required',
                Rule::in(['1', '0'])
            ],
            'availability' => [
                'required',
                Rule::in(['1', '0'])
            ],
        ]);


        $apartment = Apartment::findOrFail($id);
        $newApartment = new Apartment();
        $newApartment->fill($data);
        $newApartment->save();
    

        // Handle images to delete (if needed)
        if ($request->has('delete_images')) {
            $imagesToDelete = $request->input('delete_images');
        }
    
        // Handle images to update or add
        // if ($request->has('images')) {
        //     $images_path = Storage::put('apartments', $data['images']);
        // }

        $apartment->update($data);
    
        if (key_exists('services', $data)) {
            $apartment->services()->sync($data['services']);
        }

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

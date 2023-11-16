<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ApartmentUpsertRequest;
use App\Models\Apartment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use App\Models\Service;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Http;

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


        $query = request()->query();
        // dd($query);

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
    public function store(ApartmentUpsertRequest $request)
    {
        $data = $request->validated();


        $query = $data["address"];
        $key = 'G3UqwADY39DYhuxHmuH49Pv68jOXjJTW';

        $response = Http::get("https://api.tomtom.com/search/2/geocode/getaddress.json", [
            'query' => $query,
            'key' => $key,
        ]);

        $geocodingData = $response->json();

        if (!empty($geocodingData['results'])) {
            $location = $geocodingData['results'][0]['position'];
            $data['latitude'] = $location['lat'];
            $data['longitude'] = $location['lon'];
        } else {
            session()->flash('error', 'Indirizzo non valido. Per favore, inserisci un indirizzo valido.');
            return redirect()->route("admin.apartments.create");
        }

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
    public function update(ApartmentUpsertRequest $request, string $id)
    {
        $apartment = Apartment::findOrFail($id);

        $data = $request->validated();
        $data["visibility"] = boolval($data["visibility"]);
        $data["availability"] = boolval($data["availability"]);
        // dd($data);

        if ($data["visibility"]) {
            $apartment->visibility = true;
            // $apartment->availability = true;
            $apartment->save();
        } else {
            $apartment->visibility = false;
            // $apartment->availability = false;
            $apartment->save();
        };
        if ($data["availability"]) {

            $apartment->availability = true;
        } else {

            $apartment->availability = false;
        };
        $apartment->update($data);

        // Handle images to delete (if needed)
        if ($request->has('delete_images')) {
            $imagesToDelete = $request->input('delete_images');
        }


        if ($request->has('images')) {
            $images_path = Storage::put('apartments', $data['images']);
            $apartment->update(['images' => $images_path]);
        }

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

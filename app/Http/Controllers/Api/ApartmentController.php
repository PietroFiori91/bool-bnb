<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Apartment;
use Illuminate\Http\Request;

class ApartmentController extends Controller
{
   public function index(){
    // recupero i dati dal database
    $apartments = Apartment::with(["user", "services"])->get();

    $query = $request->input('address');                                //viene assegnata alla $query, l'input di ricerca dell'utente
    $key = 'G3UqwADY39DYhuxHmuH49Pv68jOXjJTW';

    $response = Http::get("https://api.tomtom.com/search/2/geocode/getaddress.json", [
        'query' => $query,
        'key' => $key,
    ]);

    $geocodingData = $response->json();                                 //la risposta dell'API è un .json che viene assegnato ad una variabile

    if (!empty($geocodingData['results'])) {
        $location = $geocodingData['results'][0]['position'];
        $latitude = $location['lat'];                                   //"lat" viene assegnata alla variabile "$latitude" richiamabile nel frontend
        $longitude = $location['lon'];

        return response()->json(['latitude' => $latitude, 'longitude' => $longitude]);
    } else {
        return response()->json(['error' => 'Indirizzo non valido. Per favore, inserisci un indirizzo valido.'], 422);
    }

     return response()->json($apartments);
   }

   public function show($id){
    $apartment = Apartment::where("id",$id) ->with(["user", "services"])->first();

    return response()->json($apartment);
   }

  //  public function geocodeAddress(Request $request)
  //   {
        
  //   }
}

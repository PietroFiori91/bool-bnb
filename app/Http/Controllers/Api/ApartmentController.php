<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Apartment;
use Illuminate\Http\Request;

class ApartmentController extends Controller
{
   public function index(){
    // recupero i dati dal database
    $apartments = Apartment::all();

     return response()->json($apartments);
   }

   public function show($id){
    $apartment = Apartment::where("id",$id)->first();
    return response()->json($apartment);
   }
}

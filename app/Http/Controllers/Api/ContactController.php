<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Mail\NewContact;
use App\Models\Apartment;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

// use Illuminate\Mail\Events\MessageSent;

class ContactController extends Controller
{
    public function store(Request $request) {
        $apartment_id = $request->input("apartment_id");
        $apartment = Apartment::find($apartment_id);
        $data = $request->validate([
            "name" => "required",
            "email" => "required|email",
            "message" => "required",
            'apartment_id' => 'nullable',

        ]);
        $newContact = new Message();

        $newContact->name = $data["name"];
        $newContact->email = $data["email"];
        $newContact->message = $data["message"];
        $newContact->apartment()->associate($apartment->id);
        $newContact->save();

        Mail::to($data['email'])->send(new NewContact($data));
        return response()->json([
            "message" => "Grazie {$data['name']} per il tuo messagiio"
        ], 201);
    }
}

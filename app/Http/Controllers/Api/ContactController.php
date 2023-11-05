<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\Request;
// use Illuminate\Mail\Events\MessageSent;

class ContactController extends Controller
{
    public function store(Request $request) {

        $data = $request->validate([
            "name" => "required",
            "email" => "required|email",
            "message" => "required",

        ]);
        $newContact = new Message();

        $newContact->name = $data["name"];
        $newContact->email = $data["email"];
        $newContact->message = $data["message"];
        
        $newContact->save();


        return response()->json([
            "message" => "Grazie {$data['name']} per il tuo messagiio"
        ], 201);
    }
}

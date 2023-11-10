<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ApartmentUpsertRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'images' => 'required|image|max:6000',
            'description' => 'required|string',
            'address' => 'required|string',
            'room' => 'required|integer',
            'bed' => 'required|integer',
            'bathroom' => 'required|integer',
            'mq' => 'required|numeric',
            'latitude' => 'nullable|string',
            'longitude' => 'nullable|string',
            'services' => 'required|min:1',
            'visibility' => 'nullable|boolean',
            'availability' => 'nullable|boolean'
        ];
    }

    public function messages(): array{
        return[
            'name.required' => "E' richiesto un nome per l'appartamento"  ,
            'images.required' => "E' neccessario caricare un'immagine" ,
            'description.required' =>"Devi inserire una piccola descrizione" ,
            'address.required' => "L'indirizzo è indispensabile" ,
            'room.required' => "Il tuo appartamento non ha camere?" ,
            'bed.required' =>"Ricordati di mettere quanti letti ci sono " ,
            'bathroom.required' =>"E' neccessare specificare il numero di bagni" ,
            'mq.required' => "E' neccessario indicare i metri quadri dell'appartamento" ,
            'services.required' =>"Di che servizi dispone il tuo appartamento?"
            
           


        ];

    }
}

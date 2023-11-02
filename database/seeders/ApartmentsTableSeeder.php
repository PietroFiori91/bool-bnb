<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Apartment;

class ApartmentsTableSeeder extends Seeder
{
    private $apartments = [
        [
            'name' => 'villa Maria',
            'address' => 'via Magolfa, 18/A - Milano | 20143',
            'description' => 'descrizione 1',
            'room' => 10,
            'bed' => 20,
            'bathroom' => 1,
            'mq' => 250,
            'latitude' => '45.45057902370618',
            'longitude' => '9.176100308949913',
            'visibility' => true,
            'availability' => true,
        ],
        [
            'name' => 'villa Gemma',
            'address' => 'via XX Settembre, 24 - Milano | 20123',
            'description' => 'descrizione 2',
            'room' => 4,
            'bed' => 5,
            'bathroom' => 4,
            'mq' => 250,
            'latitude' => '45.46804637189171',
            'longitude' => '9.16693787225847',
            'visibility' => true,
            'availability' => false,
        ],
        [
            'name' => 'villa Smeralda',
            'address' => 'via Sebastiano del Piombo, 18 -Milano | 20149',
            'description' => 'descrizione 3',
            'room' => 8,
            'bed' => 8,
            'bathroom' => 8,
            'mq' => 500,
            'latitude' => '45.47762181037545',
            'longitude' => '9.14870518243592',
            'visibility' => true,
            'availability' => true,
        ],
    ];
    /**
     * Run the database seeds.
     * 
     */
    public function run(): void
    {

        // $apartments = config('apartments');

        foreach ($this->apartments as $apartment) {

            $newApartment = new Apartment();
            $newApartment->name = $apartment['name'];
            $newApartment->address = $apartment['address'];
            $newApartment->description = $apartment['description'];
            $newApartment->room = $apartment['room'];
            $newApartment->bed = $apartment['bed'];
            $newApartment->bathroom = $apartment['bathroom'];
            $newApartment->mq = $apartment['mq'];
            $newApartment->latitude = $apartment['latitude'];
            $newApartment->longitude = $apartment['longitude'];
            $newApartment->visibility = $apartment['visibility'];
            $newApartment->availability = $apartment['availability'];

            // $newApartment->slug = Apartment::generateSlug($newApartment->name);

            $newApartment->save();
        }
    }
}

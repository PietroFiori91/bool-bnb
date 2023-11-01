<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Apartment;

class ApartmentsTableSeeder extends Seeder
{
    private $apartments = [
        [
            'name' => 'villa maria',
            'address' => 'via sadas',
            'description' => 'descrizione 1',
            'room' => 10,
            'bed' => 20,
            'bathroom' => 1,
            'mq' => 250,
            'latitude' => '42°46\'12.1"N',
            'longitude' => '10°51\'12.6"E',
            'visibility' => true, 
            'availability' => true,
        ],
        [
            'name' => 'villa gemma',
            'address' => 'via santa',
            'description' => 'descrizione 2',
            'room' => 4,
            'bed' => 5,
            'bathroom' => 4,
            'mq' => 250,
            'latitude' => '42°47\'13.1"N',
            'longitude' => '10°81\'17.6"E',
            'visibility' => true, 
            'availability' => false,
        ],
        [
            'name' => 'villa smeralda',
            'address' => 'via dsasadgasg',
            'description' => 'descrizione 3',
            'room' => 8,
            'bed' => 8,
            'bathroom' => 8,
            'mq' => 500,
            'latitude' => '42°46\'12.1"N',
            'longitude' => '10°21\'12.6"E',
            'visibility' => true, 
            'availability' => true,
        ],
        ];
    /**
     * Run the database seeds.
     * 
     */
    public function run(): void {

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

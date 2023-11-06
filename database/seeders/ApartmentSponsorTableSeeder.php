<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models\Sponsor;
use App\Models\Apartment;
use App\Models\ApartmentSponsor;

class ApartmentSponsorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $apartmentsID = Apartment::all(["id"]);
        $sponsorID = Sponsor::all(["id"]);

        $sponsorDurations = [
            1 => 24,   // 24 ore
            2 => 72,   // 72 ore
            3 => 144,  // 144 ore
        ];

        for ($i = 0; $i < 5; $i++) {

            $ApartmentSponsor = new ApartmentSponsor();

            $ApartmentSponsor->apartment_id = $apartmentsID->random()->id;
            $ApartmentSponsor->sponsor_id = $sponsorID->random()->id;

            $selectedSponsorID = $ApartmentSponsor->sponsor_id;
            $durationInHours = $sponsorDurations[$selectedSponsorID];

            $ApartmentSponsor->start_time = Carbon::now();

            $ApartmentSponsor->end_time = Carbon::now()->addHours($durationInHours);

            $ApartmentSponsor->save();
        }
    }
}

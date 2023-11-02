<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Sponsor;
use App\Models\ApartmentSponsor;
use App\Models\Apartment;
use Carbon\Carbon;

class ApartmentSponsorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $apartmentsId = Apartment::all(["id"]);
        $sponsorId = Sponsor::all(["id"]);

        $sponsorDurations = [
            1 => 24,   // 24 ore
            2 => 72,   // 72 ore
            3 => 144,  // 144 ore
        ];

        for ($i = 0; $i < 5; $i++) {

            $ApartmentSponsor = new ApartmentSponsor();

            $ApartmentSponsor->apartment_id = $apartmentsId->random()->id;
            $ApartmentSponsor->sponsor_id = $sponsorId->random()->id;

            $selectedSponsorId = $ApartmentSponsor->sponsor_id;
            $durationInHours = $sponsorDurations[$selectedSponsorId];

            $ApartmentSponsor->start_time = Carbon::now();

            $ApartmentSponsor->end_time = Carbon::now()->addHours($durationInHours);

            $ApartmentSponsor->save();
        }
    }
}

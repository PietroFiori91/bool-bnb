<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Sponsor;

class SponsorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Sponsor::create([
            "name"=>"Economy",
            "price"=>"2.99",
            "duration"=> 1,
            "payment_report"=>"dato a caso"
        ]);
        Sponsor::create([
            "name"=>"Standard",
            "price"=>"4.99",
            "duration"=> 3,
            "payment_report"=>"dato a caso"
        ]);
        Sponsor::create([
            "name"=>"Premium",
            "price"=>"8.99",
            "duration"=> 6,
            "payment_report"=>"dato a caso"
        ]);
    }
}

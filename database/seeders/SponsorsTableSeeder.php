<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Sponsor;



class SponsorsTableSeeder extends Seeder
{
    private $sponsors =  [
        [
            "name" => "Economy",
            "price" => "2.99",
            "duration" => "24",
            "payment_report" => ""
        ],
        [
            "name" => "Standard",
            "price" => "4.99",
            "duration" => "72",
            "payment_report" => ""
        ],
        [
            "name" => "Premium",
            "price" => "8.99",
            "duration" => "144",
            "payment_report" => ""
        ]



    ];
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->sponsors as  $sponsor) {
            $newSponsor = new Sponsor();
            $newSponsor->name = $sponsor["name"];
            $newSponsor->price = $sponsor["price"];
            $newSponsor->duration = $sponsor["duration"];
            $newSponsor->payment_report = $sponsor["payment_report"];
            $newSponsor->save();
        }
    }
}

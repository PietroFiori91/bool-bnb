<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// use Faker\Generator as Faker;

class servicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $services = [
            [
                'name' => 'Cucina',
                'description' => 'Uno spazio in cui gli ospiti possono cucinare',
                'icon' => 'fa-kitchen-set',
            ],
            [
                'name' => 'Fornelli',
                'description' => 'Fornelli a induzione',
                'icon' => 'fa-fire-burner',
            ],
            [
                'name' => 'Servizio',
                'description' => '',
                'icon' => 'fa-plane-up',
            ],
            [
                'name' => 'Posate',
                'description' => '',
                'icon' => 'fa-utensils',
            ],
            [
                'name' => 'caffè',
                'description' => 'macchina per caffè espresso',
                'icon' => 'fa-mug-saucer',
            ],
            [
                'name' => 'colazione',
                'description' => 'colazione alle 10.00',
                'icon' => 'fa-mug-saucer',
            ],
            [
                'name' => 'Frigorifero',
                'description' => '',
                'icon' => 'fa-toilet-portable',
            ],
            [
                'name' => 'Ingresso privato',
                'description' => 'Ingresso separato su strada o edificio',
                'icon' => 'fa-door-closed',
            ],
            [
                'name' => 'escursioni',
                'description' => '',
                'icon' => 'fa-person-hiking',
            ],
            [
                'name' => 'campeggio',
                'description' => '',
                'icon' => 'fa-campground',
            ],
            [
                'name' => 'Taxi',
                'description' => 'Servizio Taxi',
                'icon' => 'fa-taxi',
            ],
            [
                'name' => 'Tram',
                'description' => '',
                'icon' => 'fa-train-subway',
            ],
            [
                'name' => 'Autobus',
                'description' => 'Autobus a trecento metri dall\'abitazione',
                'icon' => 'fa-bus',
            ],
            [
                'name' => 'Stampante',
                'description' => 'Stampante a colori',
                'icon' => 'fa-print',
            ],
            [
                'name' => 'Animali domestici ammessi',
                'description' => 'Gli animali di servizio sono sempre ammessi',
                'icon' => 'fa-paw',
            ],
            [
                'name' => 'Self check-in',
                'description' => '',
                'icon' => 'fa-key',
            ],
            [
                'name' => 'TV',
                'description' => '',
                'icon' => 'fa-tv',
            ],
            [
                'name' => 'Aria condizionata',
                'description' => '',
                'icon' => 'fa-fan',
            ],
            [
                'name' => 'Essenziali',
                'description' => 'Asciugamani, lenzuola, sapone e carta igienica',
                'icon' => 'fa-pump-soap',
            ],

        ];

                foreach ($services as $service) {
            $newService = new Service();
            $newService -> name = $service['name'];
            $newService -> description = $service['description'];
            $newService -> icon =  $service['icon'];
            $newService -> save();
        }
    }
}



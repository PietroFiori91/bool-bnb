<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use App\Models\Apartment;
use App\Models\Image;
use App\Models\Service;
use App\Models\Sponsor;
use App\Models\User;

class ApartmentsTableSeeder extends Seeder
{
    private $apartments = [
        [
            "name" => "Tenuta costiera con vasca idromassaggio e vista sull'oceano",
            "address" => "590 Ave Alhambra, Half Moon Bay, CA, 94019, Stati Uniti",
            "description" => "Raggiungi a piedi le migliori spiagge statali della zona, i ristoranti premiati, il porto di Half Moon Bay, le escursioni a piedi lungo il California Coastal Trail, le attività per famiglie nella zona e molto altro ancora.",
            "room" => 3,
            "bed" => 9,
            "bathroom" => 2,
            "mq" => 100,
            "latitude" => '37°30\'06.0"N',
            "longitude" => '122°28\'06.8"W',
            "visibility" => true,
            "availability" => true,
        ],
        [
            "name" => "The Pacific Dream",
            "address" => "150 Reef Point Rd, Moss Beach, CA, 94038, Stati Uniti",
            "description" => "Il tuo sogno oceanico si manifesta qui.
            Situata ai margini del Pacifico, questa splendida villa è stata progettata e costruita da zero per unirvi alla bellezza e alla pace delle acque circostanti.
            Nuova costruzione completata nel 2020 e arredamento curato professionalmente comprende ogni angolo della villa.",
            "room" => 4,
            "bed" => 6,
            "bathroom" => 4.5,
            "mq" => 300,
            "latitude" => '37°31\'38.9"N',
            "longitude" => '122°30\'59.9"W',
            "visibility" => true,
            "availability" => false,
        ],
        [
            "name" => "Tranquilla casa sull'albero con vista sull'oceano",
            "address" => "340 Swanston St. Aptos, CA, 95003, Stati Uniti",
            "description" => "Presentato da Sunset Magazine come una 'fuga chic'.
            All'interno, i mobili e i dettagli architettonici della metà del secolo sono realizzati con materiali naturali come legno e pietra che creano un tono rilassante e sacro. Rannicchiati con una buona lettura dalla luce che scorre attraverso le finestre dal pavimento al soffitto e sotto le travi di legno svettanti o rimboccati le coperte per la sera chiudendo le porte scorrevoli ispirate agli schermi giapponesi.",
            "room" => 3,
            "bed" => 3,
            "bathroom" => 1,
            "mq" => 120,
            "latitude" => '37°40\'52.6"N',
            "longitude" => '122°29\'04.9"W',
            "visibility" => true,
            "availability" => true,
        ],
        [
            "name" => "Marbella Lane - Oasi costiera rigenerante",
            "address" => "399-307 Genevieve Ave, Pacifica, CA, 94044, Stati Uniti",
            "description" => "Nascosta nella tranquilla e pittoresca valle di Vallemar, questa casa in legno di cedro di Lindahl offre serenità e comodità, con un rapido accesso a molti punti di viaggio. Questa casa ha un elegante design interno dello chalet, l'ampio soggiorno dispone di lucernari e ampie finestre, con accesso diretto alla terrazza del cortile e a una vasca idromassaggio. Goditi una tazza di tè ammirando la miracolosa bellezza della foresta e delle montagne che ti circondano; potresti persino avvistare occasionalmente un cervo o una volpe.",
            "room" => 3,
            "bed" => 4,
            "bathroom" => 3,
            "mq" => 650,
            "latitude" => '37°36\'36.9"N',
            "longitude" => '122°28\'43.1"W',
            "visibility" => true,
            "availability" => true,
        ],
        [
            "name" => "Alloggio di lusso a Del Monte Forest, California, Stati Uniti",
            "address" => "3100-3198 Patio Dr, Pebble Beach, CA, 93953, Stati Uniti",
            "description" => "La foresta di Del Monte ispira la forma di questa residenza contemporanea californiana. Una capanna all'aperto riecheggia le linee rette degli alberi più alti, l'area lounge si estende sotto i rami tortuosi e, all'interno, danze luminose soffuse con le foglie su un tappeto verde muschio e pannelli in legno. 3 campi da golf, tra cui Pebble Beach, e 2 spiagge in 10 minuti ti faranno prendere il via e la sabbia.",
            "room" => 3,
            "bed" => 3,
            "bathroom" => 3,
            "mq" => 800,
            "latitude" => '36°35\'29.3"N',
            "longitude" => '121°57\'12.1"W',
            "visibility" => true,
            "availability" => true,
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

        foreach ($this->apartments as $apartment)  {

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

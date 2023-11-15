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

//S e W hanno il segno negativo (latitudine e longitudine)
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
            "latitude" => 37.30060,
            "longitude" => -122.28068,
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
            "latitude" => 37.31389,
            "longitude" => -122.30599,
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
            "mq" => 220,
            "latitude" => 37.40526,
            "longitude" => -122.29049,
            "visibility" => true,
            "availability" => true,
        ],
        [
            "name" => "Marbella Lane - Oasi costiera rigenerante",
            "address" => "307 Genevieve Ave, Pacifica, CA, 94044, Stati Uniti",
            "description" => "Nascosta nella tranquilla e pittoresca valle di Vallemar, questa casa in legno di cedro di Lindahl offre serenità e comodità, con un rapido accesso a molti punti di viaggio. Questa casa ha un elegante design interno dello chalet, l'ampio soggiorno dispone di lucernari e ampie finestre, con accesso diretto alla terrazza del cortile e a una vasca idromassaggio. Goditi una tazza di tè ammirando la miracolosa bellezza della foresta e delle montagne che ti circondano; potresti persino avvistare occasionalmente un cervo o una volpe.",
            "room" => 3,
            "bed" => 4,
            "bathroom" => 3,
            "mq" => 650,
            "latitude" => 37.36369,
            "longitude" => -122.28431,
            "visibility" => true,
            "availability" => true,
        ],
        [
            "name" => "Alloggio di lusso a Del Monte Forest, California, Stati Uniti",
            "address" => "3198 Patio Dr, Pebble Beach, CA, 93953, Stati Uniti",
            "description" => "La foresta di Del Monte ispira la forma di questa residenza contemporanea californiana. Una capanna all'aperto riecheggia le linee rette degli alberi più alti, l'area lounge si estende sotto i rami tortuosi e, all'interno, danze luminose soffuse con le foglie su un tappeto verde muschio e pannelli in legno. 3 campi da golf, tra cui Pebble Beach, e 2 spiagge in 10 minuti ti faranno prendere il via e la sabbia.",
            "room" => 3,
            "bed" => 3,
            "bathroom" => 3,
            "mq" => 800,
            "latitude" => 36.35293,
            "longitude" => -121.57121,
            "visibility" => true,
            "availability" => true,
        ],
        [
            "name" => "Luminoso, moderno 5b/4ba Portola Valley Home",
            "address" => "160 Los Trancos Cir, Portola Valley, CA, 94028, Stati Uniti",
            "description" => "Casa spaziosa e tranquilla nella Valle di Portola. Goditi la vasta terrazza all'aperto, accomodati vicino al camino, ammira gli alberi imponenti attraverso le splendide finestre panoramiche della casa o semplicemente rilassati nello spazio pulito, moderno e completamente arredato. I rinomati sentieri di Portola Valley che si affacciano sulla baia di San Francisco si trovano a soli 100 passi di distanza.",
            "room" => 5,
            "bed" => 5,
            "bathroom" => 4,
            "mq" => 350,
            "latitude" => 122.11573,
            "longitude" => -37.20495,
            "visibility" => true,
            "availability" => true,
        ],
        [
            "name" => "Nature/Architectural Lovers Dream Pad in Sequoie",
            "address" => "731 Lovell Ave, Mill Valley, CA, 94941, Stati Uniti",
            "description" => "Siamo amanti della natura e abbiamo comprato la casa dei nostri sogni tra le sequoie ai piedi del Monte Tam e ora lo condividiamo con i viaggiatori che apprezzano l'architettura e lo stile di vita all'interno e all'esterno della California settentrionale! Costruita dal visionario architetto biologico Daniel Lieberman nel 1962 su sequoie e vetri secolari, la casa è una composizione piena di spazi aperti ancorati a un camino centrale, simile al lavoro del mentore di Lieberman, Frank Lloyd Wright.",
            "room" => 3,
            "bed" => 2,
            "bathroom" => 3.5,
            "mq" => 280,
            "latitude" => -122.33579,
            "longitude" => 37.54483,
            "visibility" => true,
            "availability" => true,
        ],
        [
            "name" => "Rifugio esecutivo nel cuore della Silicon Valley",
            "address" => "3562 Golden State Dr, Santa Clara, CA, 95051, Stati Uniti",
            "description" => "Gioca e lavora in questo splendido rambler di 2100 metri quadrati a pochi minuti da Big Tech, Levi Stadium, Great America e tutto ciò che c'è di fantastico nella Bay Area. Master suite, più 2 camere da letto e un ufficio con 2 postazioni di lavoro e un futon per 8 persone. Goditi la cucina gourmet mentre ascolti la tua stazione Spotify preferita sul sistema di intrattenimento utilizzando l'app Onkyo. LG 55 in schermo piatto e camino fuori dalla cucina. Patio anteriore per il caffè del mattino e vasca idromassaggio per rilassarsi. Custode in loco nell'unità collegata.",
            "room" => 4,
            "bed" => 4,
            "bathroom" => 2,
            "mq" => 2100,
            "latitude" => -121.59390,
            "longitude" => 37.20369,
            "visibility" => true,
            "availability" => true,
        ],
        [
            "name" => "Il cavalluccio marino di Willow Glen",
            "address" => "2579 Richland Ave, San Jose, CA, 95125, Stati Uniti",
            "description" => "In primo piano su Houzz, Style Me Pretty Living e PopSugar, oltre che selezionato per il prestigioso Willow Glen Home Tour, questa casa pluripremiata completamente ristrutturata con un paradiso per il nuoto è stata aperta per le tue vacanze, soggiorni o viaggi di lavoro!
            Dalla scintillante piscina e spa a forma di cavalluccio marino, al pavimento del bagno fatto di pochi centesimi, l'unicità, il comfort e la gioia di questa casa ti lascerà sicuramente sorridente.
            Willow Glen, San Jose è vicino a negozi, cibo e autostrade.",
            "room" => 3,
            "bed" => 4,
            "bathroom" => 2.5,
            "mq" => 500,
            "latitude" => -121.53121,
            "longitude" => 37.16571,
            "visibility" => true,
            "availability" => true,
        ],
        [
            "name" => "Log-Cabin Home Retreat nella foresta",
            "address" => "123 Skylonda Dr, Woodside, CA, 94062, Stati Uniti",
            "description" => "Rilassati e rigenerati in questo incantevole rifugio unico nel suo genere in legno, situato su un ettaro di sequoie della California del Nord. Costruito nel 1937, questo luogo ospita matrimoni, concerti all'aperto, ritiri, famiglie e gruppi che hanno apprezzato la proprietà per decenni. Vuoi fare escursioni a piedi o in bicicletta? La proprietà ha un sentiero che inizia in fondo al vialetto, va dietro la casa e conduce alla riserva aperta La Honda Creek Open Space Preserve di oltre 6100 acri. ",
            "room" => 3,
            "bed" => 6,
            "bathroom" => 2,
            "mq" => 600,
            "latitude" => -122.15587,
            "longitude" => 37.23062,
            "visibility" => true,
            "availability" => false,
        ],
        [
            "name" => "Splendido resort californiano e piscina a sfioro",
            "address" => "452 W Maple Way, Woodside, CA, 94062, Stati Uniti",
            "description" => "Raggiungi a piedi le migliori spiagge statali della zona, i ristoranti premiati, il porto di Half Moon Bay, le escursioni a piedi lungo il California Coastal Trail, le attività per famiglie nella zona e molto altro ancora.",
            "room" => 6,
            "bed" => 6,
            "bathroom" => 6,
            "mq" => 800,
            "latitude" => -122.28068,
            "longitude" => 37.30060,
            "visibility" => true,
            "availability" => true,
        ],
    ];
    /**
     * Run the database seeds.
     * 
     */
    public function run(): void {
        
        // $apartments = config('boolbnb.store'); // Legge la API dalla config


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

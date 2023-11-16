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

            "user_id" => 1,
            "name" => "Tenuta costiera con vista sull'oceano",
            "address" => "590 Ave Alhambra, Half Moon Bay, CA, 94019, Stati Uniti",
            "description" => "Raggiungi a piedi le migliori spiagge statali della zona, i ristoranti premiati, il porto di Half Moon Bay, le escursioni a piedi lungo il California Coastal Trail, le attività per famiglie nella zona e molto altro ancora.",
            "room" => 3,
            "images" => "apartments/app01.webp",
            "bed" => 9,
            "bathroom" => 2,
            "mq" => 100,
            "latitude" => '37°30\'06.0"N',
            "longitude" => '122°28\'06.8"W',
            "visibility" => true,
            "availability" => true,
        ],
        [
            "user_id" => 1,
            "name" => "The Pacific Dream",
            "address" => "150 Reef Point Rd, Moss Beach, CA, 94038, Stati Uniti",
            "description" => "Il tuo sogno oceanico si manifesta qui.
            Situata ai margini del Pacifico, questa splendida villa è stata progettata e costruita da zero per unirvi alla bellezza e alla pace delle acque circostanti.
            Nuova costruzione completata nel 2020 e arredamento curato professionalmente comprende ogni angolo della villa.",
            "room" => 4,
            "images" => "apartments/app02.webp",
            "bed" => 6,
            "bathroom" => 4.5,
            "mq" => 300,
            "latitude" => '37°31\'38.9"N',
            "longitude" => '122°30\'59.9"W',
            "visibility" => true,
            "availability" => false,
        ],
        [
            "user_id" => 1,
            "name" => "Tranquilla casa sull'albero con vista sull'oceano",
            "address" => "340 Swanston St. Aptos, CA, 95003, Stati Uniti",
            "description" => "Presentato da Sunset Magazine come una 'fuga chic'.
            All'interno, i mobili e i dettagli architettonici della metà del secolo sono realizzati con materiali naturali come legno e pietra che creano un tono rilassante e sacro. Rannicchiati con una buona lettura dalla luce che scorre attraverso le finestre dal pavimento al soffitto e sotto le travi di legno svettanti o rimboccati le coperte per la sera chiudendo le porte scorrevoli ispirate agli schermi giapponesi.",
            "room" => 3,
            "images" => "apartments/app03.webp",
            "bed" => 3,
            "bathroom" => 1,
            "mq" => 220,
            "latitude" => '37°40\'52.6"N',
            "longitude" => '122°29\'04.9"W',
            "visibility" => true,
            "availability" => true,
        ],
        [
            "user_id" => 1,
            "name" => "Marbella Lane - Oasi costiera rigenerante",
            "address" => "307 Genevieve Ave, Pacifica, CA, 94044, Stati Uniti",
            "description" => "Nascosta nella tranquilla e pittoresca valle di Vallemar, questa casa in legno di cedro di Lindahl offre serenità e comodità, con un rapido accesso a molti punti di viaggio. Questa casa ha un elegante design interno dello chalet, l'ampio soggiorno dispone di lucernari e ampie finestre, con accesso diretto alla terrazza del cortile e a una vasca idromassaggio. Goditi una tazza di tè ammirando la miracolosa bellezza della foresta e delle montagne che ti circondano; potresti persino avvistare occasionalmente un cervo o una volpe.",
            "room" => 3,
            "images" => "apartments/app04.webp",
            "bed" => 4,
            "bathroom" => 3,
            "mq" => 650,
            "latitude" => '37°36\'36.9"N',
            "longitude" => '122°28\'43.1"W',
            "visibility" => true,
            "availability" => true,
        ],
        [
            "user_id" => 1,
            "name" => "Alloggio di lusso a Del Monte Forest, California, Stati Uniti",
            "address" => "3198 Patio Dr, Pebble Beach, CA, 93953, Stati Uniti",
            "description" => "La foresta di Del Monte ispira la forma di questa residenza contemporanea californiana. Una capanna all'aperto riecheggia le linee rette degli alberi più alti, l'area lounge si estende sotto i rami tortuosi e, all'interno, danze luminose soffuse con le foglie su un tappeto verde muschio e pannelli in legno. 3 campi da golf, tra cui Pebble Beach, e 2 spiagge in 10 minuti ti faranno prendere il via e la sabbia.",
            "room" => 3,
            "images" => "apartments/app05.webp",
            "bed" => 3,
            "bathroom" => 3,
            "mq" => 800,
            "latitude" => '36°35\'29.3"N',
            "longitude" => '121°57\'12.1"W',
            "visibility" => true,
              "availability" => true,
        ],
        [
            "user_id" => 1,
            "name" => "Luminoso, moderno 5b/4ba Portola Valley Home",
            "address" => "160 Los Trancos Cir, Portola Valley, CA, 94028, Stati Uniti",
            "description" => "Casa spaziosa e tranquilla nella Valle di Portola. Goditi la vasta terrazza all'aperto, accomodati vicino al camino, ammira gli alberi imponenti attraverso le splendide finestre panoramiche della casa o semplicemente rilassati nello spazio pulito, moderno e completamente arredato. I rinomati sentieri di Portola Valley che si affacciano sulla baia di San Francisco si trovano a soli 100 passi di distanza.",
            "room" => 5,
            "images" => "apartments/app06.jpg",
            "bed" => 5,
            "bathroom" => 4,
            "mq" => 350,
            "latitude" => '122°11\'57.3"W',
            "longitude" => '37°20\'49.5"N',
            "visibility" => true,
            "availability" => true,
        ],
        [
            "user_id" => 1,
            "name" => "Nature/Architectural Lovers Dream Pad in Sequoie",
            "address" => "731 Lovell Ave, Mill Valley, CA, 94941, Stati Uniti",
            "description" => "Siamo amanti della natura e abbiamo comprato la casa dei nostri sogni tra le sequoie ai piedi del Monte Tam e ora lo condividiamo con i viaggiatori che apprezzano l'architettura e lo stile di vita all'interno e all'esterno della California settentrionale! Costruita dal visionario architetto biologico Daniel Lieberman nel 1962 su sequoie e vetri secolari, la casa è una composizione piena di spazi aperti ancorati a un camino centrale, simile al lavoro del mentore di Lieberman, Frank Lloyd Wright.",
            "room" => 3,
            "images" => "apartments/app07.webp",
            "bed" => 2,
            "bathroom" => 3.5,
            "mq" => 280,
            "latitude" => '122°33\'57.9"W',
            "longitude" => '37°54\'48.3"N',
            "visibility" => true,
            "availability" => true,
        ],
        [
            "user_id" => 1,
            "name" => "Rifugio esecutivo nel cuore della Silicon Valley",
            "address" => "3562 Golden State Dr, Santa Clara, CA, 95051, Stati Uniti",
            "description" => "Gioca e lavora in questo splendido rambler di 2100 metri quadrati a pochi minuti da Big Tech, Levi Stadium, Great America e tutto ciò che c'è di fantastico nella Bay Area. Master suite, più 2 camere da letto e un ufficio con 2 postazioni di lavoro e un futon per 8 persone. Goditi la cucina gourmet mentre ascolti la tua stazione Spotify preferita sul sistema di intrattenimento utilizzando l'app Onkyo. LG 55 in schermo piatto e camino fuori dalla cucina. Patio anteriore per il caffè del mattino e vasca idromassaggio per rilassarsi. Custode in loco nell'unità collegata.",
            "room" => 4,
            "images" => "apartments/app08.webp",
            "bed" => 4,
            "bathroom" => 2,
            "mq" => 2100,
            "latitude" => '121°59\'39.0"W',
            "longitude" => '37°20\'36.9"N',
            "visibility" => true,
            "availability" => true,
        ],
        [
            "user_id" => 1,
            "name" => "Il cavalluccio marino di Willow Glen",
            "address" => "2579 Richland Ave, San Jose, CA, 95125, Stati Uniti",
            "description" => "In primo piano su Houzz, Style Me Pretty Living e PopSugar, oltre che selezionato per il prestigioso Willow Glen Home Tour, questa casa pluripremiata completamente ristrutturata con un paradiso per il nuoto è stata aperta per le tue vacanze, soggiorni o viaggi di lavoro!
            Dalla scintillante piscina e spa a forma di cavalluccio marino, al pavimento del bagno fatto di pochi centesimi, l'unicità, il comfort e la gioia di questa casa ti lascerà sicuramente sorridente.
            Willow Glen, San Jose è vicino a negozi, cibo e autostrade.",
            "room" => 3,
            "images" => "apartments/app09.webp",
            "bed" => 4,
            "bathroom" => 2.5,
            "mq" => 500,
            "latitude" => '121°53\'12.1"W',
            "longitude" => '37°16\'57.1"N',
            "visibility" => true,
            "availability" => true,
        ],
        [
            "images" => "",
            "user_id" => 1,
            "name" => "Log-Cabin Home Retreat nella foresta",
            "address" => "123 Skylonda Dr, Woodside, CA, 94062, Stati Uniti",
            "description" => "Rilassati e rigenerati in questo incantevole rifugio unico nel suo genere in legno, situato su un ettaro di sequoie della California del Nord. Costruito nel 1937, questo luogo ospita matrimoni, concerti all'aperto, ritiri, famiglie e gruppi che hanno apprezzato la proprietà per decenni. Vuoi fare escursioni a piedi o in bicicletta? La proprietà ha un sentiero che inizia in fondo al vialetto, va dietro la casa e conduce alla riserva aperta La Honda Creek Open Space Preserve di oltre 6100 acri. ",
            "room" => 3,
            "images" => "apartments/app10.webp",
            "bed" => 6,
            "bathroom" => 2,
            "mq" => 600,
            "latitude" => '122°15\'58.7"W',
            "longitude" => '37°23\'06.2"N',
            "visibility" => true,
            "availability" => false,
        ],
        [
            "user_id" => 1,
            "name" => "Splendido resort californiano e piscina a sfioro",
            "address" => "452 W Maple Way, Woodside, CA, 94062, Stati Uniti",
            "description" => "Raggiungi a piedi le migliori spiagge statali della zona, i ristoranti premiati, il porto di Half Moon Bay, le escursioni a piedi lungo il California Coastal Trail, le attività per famiglie nella zona e molto altro ancora.",
            "room" => 6,
            "images" => "apartments/app11.jpg",
            "bed" => 6,
            "bathroom" => 6,
            "mq" => 800,
            "latitude" => '122°28\'06.8"W',
            "longitude" => '37°30\'06.0"N',
            "visibility" => true,
            "availability" => true,
        ],
        [
            "user_id" => 1,
            "name" => "Montebello Views",
            "address" => "15955 Montebello Rd, Cupertino, CA, 95014, Stati Uniti",
            "description" => "Situata sulle colline pedemontane di Santa Cruz, a un miglio sotto i famosi Ridge Vineyards, questa lussuosa villa in vigna è decorata con viste mozzafiato sulle montagne, una vegetazione lussureggiante e alberi maturi. La piscina in stile laguna sembra un'oasi davvero privata, e i bambini adoreranno giocare sotto le cascate e sullo scivolo. Per cena, cena all'aperto e goditi il tramonto su uno dei tanti ponti.",
            "room" => 6,
            "images" => "apartments/app12.webp",
            "bed" => 7,
            "bathroom" => 5,
            "mq" => 500,
            "latitude" => '122°06\'18.8"W',
            "longitude" => '37°17\'53.7"N',
            "visibility" => true,
            "availability" => true,
        ],
        [
            "user_id" => 1,
            "name" => "Splendida tenuta in legno",
            "address" => "810 Bear Gulch Rd, Woodside, CA, 94062, Stati Uniti",
            "description" => "La splendida Woodside Estate con vista è il rifugio privato perfetto. Situata su oltre 5 acri di terreno ondulato, questa struttura dispone di circa 3.835 sf di zona giorno. Ampio soggiorno e parete a due piani con vista mozzafiato sulle sequoie. Il paesaggio semi-nativo a prova di cervo incorniciato da querce mature, buckeyes e sequoie sono completati da una serie di terrazze e percorsi per godersi al meglio questa oasi privata. A pochi metri dal cancello privato di Wunderlich Park.",
            "room" => 4,
            "images" => "apartments/app13.jpeg",
            "bed" => 4,
            "bathroom" => 3,
            "mq" => 350,
            "latitude" => '122°16\'34.4"W',
            "longitude" => '37°24\'17.6"N',
            "visibility" => true,
            "availability" => true,
        ],
        [
            "user_id" => 1,
            "name" => "Il Paradiso in Terra",
            "address" => "600 Moon Mountain Rd, Sonoma, CA, 95476, Stati Uniti",
            "description" => "Il Paradiso in Terra è un'incantevole villa nella Wine Country californiana, situata vicino alla Valle della Luna e allo storico Monte Rosso Vineyard. Immersa in una tenuta di due acri con vista mozzafiato sul Monte Tamalpais e sulla Valle della Sonoma, la casa di 3.000 metri quadrati offre una superba gamma di servizi per il relax e delizie gourmet, tra cui una piscina all'aperto e una vasca idromassaggio, ristoranti all'aperto e una cucina completamente attrezzata. Tre splendide camere da letto ospitano famiglie, ospiti di matrimoni e gruppi di amici fino a sei persone.",
            "room" => 3,
            "images" => "apartments/app14.jpg",
            "bed" => 3,
            "bathroom" => 3,
            "mq" => 3000,
            "latitude" => '122°29\'11.1"W',
            "longitude" => '38°20\'13.8"N',
            "visibility" => true,
            "availability" => true,
        ],
        [
            "user_id" => 1,
            "name" => "Villa Nel Bosco",
            "address" => "4585 Trinity Rd, Glen Ellen, CA, 95442, Stati Uniti",
            "description" => "Fascino toscano del centro storico, proprio nel cuore della regione vinicola, Villa Nel Bosco è la vacanza Sonoma e Napa Valley dei tuoi sogni. Situata sulla strada di montagna che divide Napa e Sonoma, questa lussuosa tenuta con quattro camere da letto è circondata da oltre seicento cantine, diversi ristoranti con stelle e alcuni dei paesaggi più iconici della California. E se hai voglia di fare un viaggio in città, San Francisco e Sacramento distano entrambi poco più di un'ora.
            Questa casa colonica di ispirazione toscana presenta le autentiche finestre con persiane, soffitti con travi a vista, pietra naturale e infissi in ferro battuto che adornano molte delle antiche case della Toscana.",
            "room" => 3,
            "images" => "apartments/app15.jpg",
            "bed" => 3,
            "bathroom" => 3,
            "mq" => 700,
            "latitude" => '122°28\'18.6"W',
            "longitude" => '38°24\'03.9"N',
            "visibility" => true,
            "availability" => true,
        ],
        [
            "user_id" => 1,
            "name" => "Bungalow Twins",
            "address" => "13018-13164 Henno Rd, Glen Ellen, CA, 95442, Stati Uniti",
            "description" => "Questo incantevole paio di bungalow si trova in una tenuta privata nel cuore di Napa e Sonoma, a pochi minuti da Glen Ellen. Ogni bungalow può ospitare due persone e può ospitare quattro persone, ognuna delle quali include una zona soggiorno privata, un bagno, una terrazza e una cucina. Con un'ampia piscina e servizi eccezionali all'aperto, la tenuta costituisce la base perfetta per assaporare il tempo privato con le avventure tra un'avventura e l'altra in questa splendida regione vinicola della California.",
            "room" => 2,
            "images" => "apartments/app16.jpg",
            "bed" => 2,
            "bathroom" => 2,
            "mq" => 400,
            "latitude" => '38°22\'17.8"N',
            "longitude" => '122°31\'28.0"W',
            "visibility" => true,
            "availability" => true,
        ],
        [
            "user_id" => 1,
            "name" => "Tuscan Retreat con pensione, piscina e vista mozzafiato",
            "address" => "4170-4390 Stonefield Ln, Fairfield, CA, 94534, Stati Uniti",
            "description" => "Benvenuti a Villa Capricho, una lussuosa casa vacanze situata nel cuore della regione vinicola della California. Questa ampia tenuta di 25 acri fa parte di una comunità recintata e si trova su un vigneto privato, con vista sulla Suisun Valley. A soli 15 miglia a est di Napa, Villa Capricho offre splendide viste a 360 gradi sulla campagna circostante. L'ingresso a due piani e la strada privata offrono il massimo senso di privacy e isolamento, mentre il suo splendido paesaggio e uliveto creano un ambiente tranquillo",
            "room" => 7,
            "images" => "apartments/app17.webp",
            "bed" => 7,
            "bathroom" => 7,
            "mq" => 850,
            "latitude" => '38°15\'14.0"N',
            "longitude" => '122°07\'37.5"W',
            "visibility" => true,
            "availability" => true,
        ],
        [
            "user_id" => 1,
            "name" => "Rocky Ridge",
            "address" => "11733-11725 Rocky Ridge Ct, Truckee, CA, 96161, Stati Uniti",
            "description" => "Alloggio di lusso e rifugio nella Foresta Nazionale di Tahoe
            L'artigianato del Vecchio Mondo incontra il lusso tra l'ampia bellezza della Foresta Nazionale di Tahoe.
            Costruito da un pluripremiato team di appaltatori e architetti, Rocky Ridge è stato progettato per affrontare la prova del tempo.
            La proprietà privata, ispirata al lodge, si trova in una posizione strategica a pochi minuti da diversi campi da golf, dalle spiagge e dalle stazioni sciistiche a scelta. Ciaspole o sci di fondo direttamente fuori dalla porta sul retro in inverno o prendi i tuoi scarponi da mountain bike/escursionismo in estate e accedi al famoso Sawtooth Trail System di Tahoe. Goditi l'aria fresca della California da un gazebo privato arredato e da un portico avvolgente. Completo di cucina esterna, focolare e vasca idromassaggio, è disponibile tutto ciò di cui hai bisogno, dall'osservazione delle stelle ai marshmallow arrosto.",
            "room" => 6,
            "images" => "apartments/app18.jpeg",
            "bed" => 10,
            "bathroom" => 5,
            "mq" => 1100,
            "latitude" => '39°18\'32.2"N',
            "longitude" => '120°10\'59.3"W',
            "visibility" => true,
            "availability" => true,
        ],
        [
            "user_id" => 1,
            "name" => "Highland Estate at Old Greenwood",
            "address" => "13445 Fairway Dr, Truckee, CA, 96161, Stati Uniti",
            "description" => "I fairway corrono vicino alle pinete fuori da questa classica casa in stile lodge. La zona barbecue e la vasca idromassaggio offrono una vista sia sul campo da golf che su Lookout Mountain. Sci e ciaspole vintage punteggiano le pareti di una grande sala a pianta aperta con camino in pietra nel cuore. Si trova a breve distanza in auto da resort come Palisades Tahoe e Northstar California, e per il centro storico di Truckee.",
            "room" => 5,
            "images" => "apartments/app19.jpeg",
            "bed" => 9,
            "bathroom" => 4,
            "mq" => 700,
            "latitude" => '39°20\'27.4"N',
            "longitude" => '120°09\'00.2"W',
            "visibility" => true,
            "availability" => true,
        ],
        [
            "user_id" => 1,
            "name" => "Tenuta vittoriana moderna",
            "address" => "81-1 Lerner Dr, Calistoga, CA, 94515, Stati Uniti",
            "description" => "Vigneti e parchi statali si estendono intorno a questa casa di Calistoga fiancheggiata dal portico. Soggiorno all'aperto e zone pranzo sono nascoste nei giardini fuori dal portico, e c'è un patio con piscina e vasca idromassaggio. Una finestra a golfo circonda un angolo per la colazione e ampie assi del pavimento si estendono dalla cucina al soggiorno e alle sale da pranzo. Si trova a pochi minuti di auto da una serie di cantine, ristoranti e dalle famose sorgenti termali della città.",
            "room" => 7,
            "images" => "apartments/app20.webp",
            "bed" => 7,
            "bathroom" => 7,
            "mq" => 400,
            "latitude" => '38°34\'34.0"N',
            "longitude" => '122°35\'16.9"W',
            "visibility" => true,
            "availability" => true,
        ],
        [
            "user_id" => 1,
            "name" => "Ocean View Estate Steps to the Lodge",
            "address" => "1400-1454 Riata Rd, Pebble Beach, CA, 93953, Stati Uniti",
            "description" => "Ampia villa con 5 camere da letto e 5 bagni situata all'angolo tra Alvarado e Riata a Pebble Beach, a pochi passi dal cancello principale per gli eventi della settimana dell'auto, dal campo da golf e da altri luoghi speciali di Pebble Beach. Ampie zone giorno con vista sull'oceano nella grande camera. In questo caso si tratta di una stanza davvero grandiosa con soffitti a volta svettanti che si aggiungono al volume della Grand Room. L'enorme isola di quarzite in cucina rende questa zona perfetta per intrattenere.",
            "room" => 5,
            "images" => "apartments/app21.jpeg",
            "bed" => 5,
            "bathroom" => 5,
            "mq" => 450,
            "latitude" => '36°34\'27.3"N',
            "longitude" => '121°56\'54.0"W',
            "visibility" => true,
            "availability" => true,
        ],
        [
            "user_id" => 1,
            "name" => "Inspiration Place Lakefront",
            "address" => "1250 W Lake Blvd, Tahoe City, CA, 96145, Stati Uniti",
            "description" => "Le acque di Tahoe si estendono all'orizzonte fuori da questa baita sul lago. Giri d'acqua al molo privato, con barbecue all'esterno e zone giorno e zone pranzo all'aperto si affacciano sulla riva. Pietra e legno sono il luogo ideale in stanze ispirate a una casa originale risalente agli anni '60. Il Sunnyside, situato sul lato ovest del lago, si trova a pochi minuti da William Kent Beach, Homewood e Tahoe City.",
            "room" => 5,
            "images" => "apartments/app22.webp",
            "bed" => 9,
            "bathroom" => 6,
            "mq" => 580,
            "latitude" => '39°08\'54.1"N',
            "longitude" => '120°08\'45.2"W',
            "visibility" => true,
            "availability" => true,
        ],
        [
            "user_id" => 1,
            "name" => "Wonderland",
            "address" => "1293-1201 Lisbon Ln, Pebble Beach, CA, 93953, Stati Uniti",
            "description" => "Le brezze oceaniche accarezzano i tranquilli boschi di questa villa nascosta, situata vicino al cuore della foresta di Del Monte. Circondata da imponenti pini californiani, la casa presenta interni a cattedrale, un'ariosa terrazza all'aperto, una cucina di alto livello e un sontuoso soggiorno / bar. Nelle vicinanze si trovano i leggendari campi da golf, le spa, le spiagge e i mercati alimentari artigianali di Pebble Beach.
            Dal Paese delle Meraviglie, gli ospiti si trovano a pochi passi dai drammatici paesaggi costieri di Pebble Beach e Cypress Point, completi di rinomati campi da golf e spiagge tranquille che promettono sole e sabbia. Dopo una passeggiata sul mare, goditi i frutti di mare freschi, prima di visitare una taphouse nelle vicinanze o la scena artistica di Carmel-by-the-Sea. Le delizie della regione sono a tua disposizione, che vanno dalle visite in cantina alle entusiasmanti spedizioni di pesca.",
            "room" => 5,
            "images" => "apartments/app23.webp",
            "bed" => 6,
            "bathroom" => 4,
            "mq" => 700,
            "latitude" => '36°34\'51.0"N',
            "longitude" => '121°56\'55.9"W',
            "visibility" => true,
            "availability" => true,
        ],
        [
            "user_id" => 1,
            "name" => "Japra Mahal Palace",
            "address" => "45142-45096 Cougar Cir, Fremont, CA, 94539, Stati Uniti",
            "description" => "Il luogo perfetto per il tuo prossimo evento indimenticabile, Japra Mahal è una squisita proprietà di 11 acri con campi da putting green, tennis e basket, vigneti e sentieri che catturano viste mozzafiato su Mission Peak e sulla baia di San Francisco. All'interno troverai pavimenti in marmo, caminetti in pietra intagliati a mano e una straordinaria collezione di manufatti indiani.",
            "room" => 8,
            "images" => "apartments/app24.webp",
            "bed" => 8,
            "bathroom" => 7,
            "mq" => 1400,
            "latitude" => '37°30\'42.4"N',
            "longitude" => '121°54\'46.1"W',
            "visibility" => true,
            "availability" => true,
        ],
        [
            "user_id" => 1,
            "name" => "Villa De Lago",
            "address" => "1440 Pittman Terrace, Glenbrook, NV, 89413, Stati Uniti",
            "description" => "Crea ricordi con familiari e amici con le pinete e le acque limpide del lago Tahoe come sfondo a Villa De Lago. Questa ampia casa vacanze sul lungomare, il cui nome significa la casa sul lago, ti offre la quintessenza dell'esperienza: un molo privato per immergere i piedi, un litorale in bilico da esplorare e una posizione tranquilla vicino a South Lake Tahoe, a nord di Cave Rock, Nevada.
            Che tu voglia rilassarti vicino all'acqua o uscire ed esplorare il lago, Villa De Lago rende tutto più semplice con un comodo molo, kayak forniti e una terrazza arredata con spazio per rilassarsi e cenare, oltre a un barbecue. Dopo che il sole tramonta sulle montagne dall'altra parte del lago, riunisciti intorno al tavolo da biliardo, accendi la TV in streaming o condividi le foto delle vacanze tramite Wi-Fi.
            L'incredibile grande sala della villa dà un tocco moderno al classico rifugio di montagna californiano. I soffitti a volta si librano sul soggiorno a pianta aperta, sulla sala da pranzo e sulla cucina completamente attrezzata. Le finestre a tutta altezza che si affacciano sul lago rubano il focus di giorno; di notte, il caminetto a doppia altezza diventa il punto focale.
            Mentre Villa De Lago ha un proprio accesso al lago, è anche facile raggiungere in auto le attrazioni, i negozi, i ristoranti e altro ancora nelle vicinanze. La villa si trova a 10 minuti di auto dal villaggio sul lungomare di Zephyr Cove e a 10 minuti di auto dalle spiagge di Zephyr Cove e Nevada. In estate, i golfisti troveranno tre campi nel raggio di 16 miglia; in inverno, pianifica di trascorrere il tuo soggiorno sciando in una delle numerose località vicine.",
            "room" => 4,
            "images" => "apartments/app25.jpg",
            "bed" => 4,
            "bathroom" => 3,
            "mq" => 600,
            "latitude" => '39°02\'53.7"N',
            "longitude" => '119°56\'49.9"W',
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
            $newApartment->images = $apartment['images'];
            $newApartment->bathroom = $apartment['bathroom'];
            $newApartment->mq = $apartment['mq'];
            $newApartment->latitude = $apartment['latitude'];
            $newApartment->longitude = $apartment['longitude'];
            $newApartment->visibility = $apartment['visibility'];
            $newApartment->availability = $apartment['availability'];
            $newApartment->user_id = $apartment['user_id'];

            // $newApartment->slug = Apartment::generateSlug($newApartment->name);

            $newApartment->save();

        }
    }
}

<?php

namespace App\Http\Controllers\Admin;

use Braintree\Transaction;
use Braintree\Gateway;
use Carbon\Carbon;
use App\Models\Sponsor;
use App\Models\Apartment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\SponsorController;



class PaymentController extends Controller
{
    public function processPayment(Request $request)
    {
        $request->validate([
            'sponsor_id' => 'required|exists:sponsors,id',
            'apartment_id' => 'required|exists:apartments,id',
            'payment_method_nonce' => 'required',
        ]);

        $paymentMethod = $request->input('payment_method', 'creditCard'); // Default a 'creditCard'
        $sponsorId = $request->input('sponsor_id');
        $sponsors = Sponsor::find($sponsorId);
        $apartmentId = $request->input('apartment_id');
        $apartment = Apartment::find($apartmentId);
        $nonce = $request->payment_method_nonce;
        $price = $sponsors->price;

        // Effettua il pagamento utilizzando Braintree
        $gateway = new Gateway([
            'model' => config('services.braintree.model'),
            'environment' => config('services.braintree.env'),
            'merchantId' => config('services.braintree.merchant_id'),
            'publicKey' => config('services.braintree.public_key'),
            'privateKey' => config('services.braintree.private_key'),
        ]);

        // Gestisci il pagamento in base al metodo selezionato
        if ($paymentMethod === 'creditCard') {
            // Elabora la transazione con carta di credito
            $result = $gateway->transaction()->sale([
                'amount' => $price,
                'paymentMethodNonce' => $nonce,
                'options' => [
                    'submitForSettlement' => true,
                ],
            ]);
        } elseif ($paymentMethod === 'paypal') {
            // Elabora la transazione con PayPal
            // Implementa la logica per il pagamento PayPal
        }

        // Gestisci la risposta di Braintree e restituisci una vista appropriata
        if ($result->success) {

            if ($apartment->sponsors()->where('valid', true)->count() > 0) {

                $apartment->sponsors()->where('valid', true)->update([
                    'end_date' => DB::raw('DATE_ADD(end_date, INTERVAL ' . $sponsors->duration . ' HOUR)'),
                ]);
                return view('admin.payment.already');
            } else { //se non esise una sponsorizzazione attiva
                $apartment->sponsors()->attach($sponsors->id, [
                    'start_date' => now()->addHours(2), // Imposta la data corrente + 2 ore
                    'end_date' => (now()->addHours(2 + $sponsors->duration)),
                ]); // imposta la durata a partire da 2 ore dalla data corrente
            }

            return view('admin.payment.success');
        } else {
            // Pagamento fallito, mostra una vista di errore
            return view('admin.payment.error', ['errorMessage' => $result->message]);
        }
    }
}

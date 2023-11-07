<?php

namespace App\Http\Controllers\Admin;

use Braintree\Transaction;
use Braintree\Gateway;
use Carbon\Carbon;
use DateInterval;
use App\Models\Sponsor;
use App\Models\Apartment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\PaymentController;
use Illuminate\Support\Facades\Auth;


class SponsorController extends Controller
{

    public function index()
    {
        $user_id = Auth::user()->id;
        $sponsors = Sponsor::all();
        $Sponsor = auth()->user()->sponsors;
        $apartments = Apartment::all()->where('user_id', $user_id);
        $Apartment = auth()->user()->apartments;

        $gateway = new Gateway([
            'environment' => config('services.braintree.environment'),
            'merchantId' => config('services.braintree.merchant_id'),
            'publicKey' => config('services.braintree.public_key'),
            'privateKey' => config('services.braintree.private_key'),
        ]);

        $token = $gateway->clientToken()->generate();

        return view('admin.payments.payment', [
            'token' => $token,
            'sponsorship' => $sponsors,
            'apartment' => $apartments->first()
        ]);
    }
}

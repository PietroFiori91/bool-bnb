<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApartmentSponsor extends Model
{
    use HasFactory;

    // serve per far funzionare il metodo attach() in Sponsor Controller
    protected $dates = [
        "name",
        "price",
        "duration",
        "payment_report"
    ];

    // serve per far funzionare il metodo attach() in Sponsor Controller
    protected $table = 'apartment_sponsor';

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apartment extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'address',
        'description',
        'room',
        'bed',
        'bathroom',
        'mq',
        'latitude',
        'longitude',
        'visibility',
        'availability',
    ];
}

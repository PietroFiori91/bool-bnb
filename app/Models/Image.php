<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Models\Apartment;

class Image extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'apartment_id', 'description', 'url', 'front_img',
        //e id dello users 
    ];

    public function apartment()
    {
        return $this->belongsToMany(Apartment::class, 'apartment_images', 'image_id', 'apartment_id');
    }
}

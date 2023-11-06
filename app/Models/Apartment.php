<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Carbon\Carbon;
use App\Models\ApartmentSponsor;
use App\Models\Image;
use App\Models\Message;
use App\Models\Service;
use App\Models\Sponsor;


class Apartment extends Model
{

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
    
    use HasFactory;

    public function images()
    {
        return $this->hasMany(Image::class);
    }
    public function sponsors()
    {
        return $this->belongsToMany(Sponsor::class);
    }
    public function services()
    {
        return $this->belongsToMany(Service::class);
    }
    public function views()
    {
        return $this->hasMany(View::class);
    }
    public function messages()
    {
        return $this->hasMany(Message::class);
    }
    public function users()
    {
        return $this->belongsTo(User::class);
    }
    public static function slugger($string)
    {
        $baseSlug = Str::slug($string);

        $i = 1;

        $slug = $baseSlug;

        while (self::where('slug', $slug)->first()) {
            $slug = $baseSlug . '-' . $i;
            $i++;
        }

        return $slug;
    }

    public function getRouteKey()
    {
        return $this->slug;
    }

    public function active_sponsors(){
        return $this->sponsors(ApartmentSponsor::class)->withPivot('start_date','end_date');
    }

}

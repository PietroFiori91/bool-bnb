<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use App\Models\Image;
use App\Models\Sponsor;
use App\Models\Service;
use App\Models\View;
use App\Models\Message;
use App\Models\User;


class Apartment extends Model
{
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
        return $this->belongsTo(Message::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getImageUrlAttribute()
    {
        $image = $this->images->first();

        if ($image) {
            return asset('storage/' . $image->path);
        }

        return asset('.\public\assets\img\IMG_20230909_145256.jpg');
    }
    protected $fillable = [
        "user_id",
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

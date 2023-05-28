<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;
    // public function agent()
    // {
    //     return $this->belongsTo(Agent::class);
    // }

    public function images()
    {
        return $this->hasMany(PropertyImage::class);
    }

    public function views()
    {
        return $this->belongsToMany(User::class, 'property_views')->withTimestamps();
    }
    // fillable fields
    protected $fillable = [
        'title',
        'description',
        'adress',
        'type',
        'address',
        'price',
        'isSell',
        'bedrooms',
        'bathrooms',
        'rooms',
        'size',
        'isActive',
        'buildingAge',
        'keywords',
        'user_id',
        'city',
        'country',
    ];
    
    public function amenities()
    {
        return $this->belongsToMany(Amenity::class, 'property_amenities');
    }
}

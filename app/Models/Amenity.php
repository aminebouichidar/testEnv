<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Amenity extends Model
{
    use HasFactory;
    protected $fillable = [
        // 'property_id',
        'amenity_id',
        'amenity_name',
    ];

    public function properties()
    {
        return $this->belongsToMany(Property::class, 'property_amenities');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyImage extends Model
{
    use HasFactory;
    public function property()
    {
        return $this->belongsTo(Property::class);
    }
    // fillable fields
    protected $fillable = [
        'property_id',
        'filename',
    ];
}

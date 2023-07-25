<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CityPosition extends Model
{
    use HasFactory;

    protected $fillable = [
        'city',
        'latitude',
        'longitude',

    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maintenance extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode_unit',
        'hm_km',
        'engine_oil',
        'transmission_oil',
        'axle_oil',
        'final_drive',
        'power_steering',
        'hydraulic',
    ];
}


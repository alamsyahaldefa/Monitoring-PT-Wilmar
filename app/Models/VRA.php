<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VRA extends Model
{
    use HasFactory;

    protected $table = 'vras'; 

    protected $fillable = [
        'vehicle_running_account',
        'order_no',
        'budget_2025',
    ];
}

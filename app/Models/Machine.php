<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Machine extends Model
{
    protected $fillable = [
        'model',
        'serial_number',
        'actual_km',
    ];
}

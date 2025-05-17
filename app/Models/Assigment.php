<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Assigment extends Model
{
     protected $fillable = [
        'start_date',
        'end_date',
        'end_motive',
        'mileage',
        'arrive_time',
    ];

    public function workSite(): BelongsTo
}

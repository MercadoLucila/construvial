<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Assignment extends Model
{
     protected $fillable = [
        'start_date',
        'end_date',
        'end_motive',
        'kms',
        'arrive_time',
    ];

    public function worksite(): BelongsTo
    {
        return $this->belongsTo(WorkSite::class);
    }

    public function machine(): HasMany
    {
        return $this->hasMany(Machine::class);
    }
}

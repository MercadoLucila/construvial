<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Work_Site extends Model
{
    protected $fillable = [
        'name',
        'start_date',
        'end_date',
    ];

    public function province(): BelongsTo
    {
        return $this->belongsTo(Province::class);
    }
}
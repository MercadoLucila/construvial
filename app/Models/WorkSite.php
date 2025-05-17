<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class WorkSite extends Model
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

    public function assignment(): HasMany
    {
        return $this->hasMany(Assignment::class);
    }

}
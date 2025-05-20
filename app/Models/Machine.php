<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Machine extends Model
{
    Use HasFactory;

    protected $fillable = [
        'model',
        'serial_number',
        'actual_km',
    ];

    public function assignment(): BelongsTo
    {
        return $this->belongsTo(Assignment::class);
    }

    public function type(): BelongsTo
    {
        return $this->belongsTo(Type::class);
    }

    public function status(): BelongsTo
    {
        return $this->belongsTo(Status::class);
    }

    public function km(): HasMany
    {
        return $this->hasMany(Km::class);
    }

    public function service(): HasMany
    {
        return $this->hasMany(Service::class);
    }
}

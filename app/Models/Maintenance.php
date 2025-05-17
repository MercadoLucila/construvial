<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Maintenance extends Model
{
    protected $fillable = [
        'name',
        'kms_needed',
    ];

    public function service(): HasMany
    {
        return $this->hasMany(Service::class);
    }
}

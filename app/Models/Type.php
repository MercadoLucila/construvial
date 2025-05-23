<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Type extends Model
{
    Use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function machine(): HasMany
    {
        return $this->hasMany(Machine::class);
    }

    
}

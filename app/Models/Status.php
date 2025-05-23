<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Status extends Model
{
    Use HasFactory;

    protected $fillable = [
        'name',
        'description',
    ];

    public function machine(): HasMany
    {
        return $this->hasMany(Machine::class);
    }

}

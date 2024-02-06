<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Storage_type extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function storages():HasMany
    {
        return $this->hasMany(Storage::class);
    }
}

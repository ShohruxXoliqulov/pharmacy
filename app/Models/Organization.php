<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Organization extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'logo',
    ];

    public function users():HasMany
    {
        return $this->hasMany(User::class);
    }

    public function todos():HasMany
    {
        return $this->hasMany(Todo::class);
    }

    public function pharmacies():HasMany
    {
        return $this->hasMany(Pharmacy::class);
    }

    public function storages():HasMany
    {
        return $this->hasMany(Storage::class);
    }
}

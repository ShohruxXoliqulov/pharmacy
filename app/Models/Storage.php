<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Storage extends Model
{
    use HasFactory;

    protected $fillable = [
        'storage_type_id',
        'organization_id',
        'name',
    ];

    public function storageType():BelongsTo
    {
        return $this->belongsTo(Storage_type::class);
    }

    public function organization():BelongsTo
    {
        return $this->belongsTo(Organization::class);
    }

    public function incomes():HasMany
    {
        return $this->hasMany(Income::class);
    }

    public function outlays():HasMany
    {
        return $this->hasMany(Outlay::class);
    }

    public function pharmacyIncomes():HasMany
    {
        return $this->hasMany(Pharmacy_income::class);
    }

    public function expireds():HasMany
    {
        return $this->hasMany(Expired::class);
    }
}

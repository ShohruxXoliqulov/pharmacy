<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Pharmacy extends Model
{
    use HasFactory;

    protected $fillable = [
        'region_id',
        'corporation_id',
        'organization_id',
        'name',
        'firm_name',
        'owner_name',
        'owner_phone',
        'image',
    ];

    public function region():BelongsTo
    {
        return $this->belongsTo(Region::class);
    }

    public function corporation():BelongsTo
    {
        return $this->belongsTo(Corporation::class);
    }

    public function organization():BelongsTo
    {
        return $this->belongsTo(Organization::class);
    }

    public function pharmacy_outlays():HasMany
    {
        return $this->hasMany(Pharmacy_outlay::class);
    }

    public function pharmacy_incomes():HasMany
    {
        return $this->hasMany(Pharmacy_income::class);
    }


    public function expireds():HasMany
    {
        return $this->hasMany(Expired::class);
    }

    public function outlays():HasMany
    {
        return $this->hasMany(Outlay::class);
    }
}

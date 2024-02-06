<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'productType_id',
        'productCapacity_id',
        'product_name',
        'price',
        'expiration_date',
    ];

    public function productType():BelongsTo
    {
        return $this->belongsTo(Product_type::class);
    }

    public function productCapacity():BelongsTo
    {
        return $this->belongsTo(Product_capacity::class);
    }

    public function incomes():HasMany
    {
        return $this->hasMany(Income::class);
    }

    public function expireds():HasMany
    {
        return $this->hasMany(Expired::class);
    }

    public function outlays():HasMany
    {
        return $this->hasMany(Outlay::class);
    }

    public function pharmacyIncomes():HasMany
    {
        return $this->hasMany(Pharmacy_income::class);
    }

    public function pharmacyOutlays():HasMany
    {
        return $this->hasMany(Pharmacy_outlay::class);
    }
}

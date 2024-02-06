<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pharmacy_income extends Model
{
    use HasFactory;

    protected $fillable = [
        'pharmacy_id',
        'storage_id',
        'product_id',
        'price',
        'quantity',
    ];

    public function pharmacy():BelongsTo
    {
        return $this->belongsTo(Pharmacy::class);
    }

    public function storage():BelongsTo
    {
        return $this->belongsTo(Storage::class);
    }


    public function product():BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}

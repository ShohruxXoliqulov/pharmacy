<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Income extends Model
{
    use HasFactory;

    protected $fillable = [
        'storage_id',
        'product_id',
        'quantity',
    ];

    public function storage():BelongsTo
    {
        return $this->belongsTo(Storage::class);
    }

    public function product():BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}

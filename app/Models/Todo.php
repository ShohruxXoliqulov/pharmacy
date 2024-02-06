<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Todo extends Model
{
    use HasFactory;

    protected $fillable = [
        'organization_id',
        'user_id',
        'date',
        'comment',
    ];

    public function organization():BelongsTo
    {
        return $this->belongsTo(Organization::class);
    }

    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}

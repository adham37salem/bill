<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Customer extends Model
{
    protected $fillable = [
        'name',
        'email',
        'mobile_no',
        "category_id"
    ];

    public function address()
    {
        return $this->hasMany(Address::class);
    }

    public function meter(): HasOne
    {
        return $this->hasOne(Meter::class, 'customer_id');
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(category::class);
    }
}

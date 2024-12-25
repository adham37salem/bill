<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Meter extends Model
{
    protected $fillable = [
        'customer_id',
        'ip_address',
        'last_reading_date',
        'newest_reading_date',
        'units',
    ];

    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class);
    }

    protected function casts(): array
    {
        return [
            'last_reading_date' => 'date',
            'newest_reading_date' => 'date',
        ];
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Customer extends Model
{
    protected $fillable = [
        'name',
        'email',
        'mobile_no',
    ];

    public function address()
    {
        return $this->hasMany(Address::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    protected $fillable = [
        'name',
        'description',
        'category',
        'price_per_day',
        'quantity_available',
        'image'
    ];

    public function rentals()
    {
        return $this->hasMany(Rental::class);
    }
}

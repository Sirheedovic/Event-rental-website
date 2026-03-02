<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rental extends Model
{
    protected $fillable = [
        'equipment_id',
        'customer_name',
        'customer_email',
        'customer_phone',
        'rental_date',
        'return_date',
        'quantity',
        'total_price',
        'status'
    ];

    protected $casts = [
        'rental_date' => 'date',
        'return_date' => 'date',
    ];

    public function equipment()
    {
        return $this->belongsTo(Equipment::class);
    }
}

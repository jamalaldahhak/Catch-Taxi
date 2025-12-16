<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CarTypeSurchargeTime extends Model
{
    protected $fillable = [
        'car_type_id',
        'day',
        'start_time',
        'end_time',
        'amount',
    ];

    public function carType()
    {
        return $this->belongsTo(CarType::class);
    }
}

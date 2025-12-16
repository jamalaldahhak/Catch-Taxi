<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = [
        'car_types_id',
        'vehicle_company',
        'model_name',
        'model_year',
        'plat_number',
        'color',
    ];

    public function carType()
    {
        return $this->belongsTo(CarType::class, 'car_types_id');
    }
}

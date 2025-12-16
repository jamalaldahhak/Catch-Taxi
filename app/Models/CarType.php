<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Enums\Status;

class CarType extends Model
{
    protected $fillable = [
        'service_category_id',
        'name',
        'image',
        'cost_for_km',
        'time_fare',
        'base_fare',
        'min_fare_amount',
        'surcharge_enabled',
        'status',
    ];
    
 protected $casts = [
    'surcharge_enabled' => 'boolean',
    'status' => Status::class,
    ];

    public function serviceCategory()
    {
        return $this->belongsTo(ServiceCategory::class);
    }

    public function cars()
    {
        return $this->hasMany(Car::class, 'car_types_id');
    }

    public function surchargeTimes()
    {
        return $this->hasMany(CarTypeSurchargeTime::class);
    }
}

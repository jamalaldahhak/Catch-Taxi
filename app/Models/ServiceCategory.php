<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Enums\Status;
 
class ServiceCategory extends Model
{
    protected $fillable = [
        'service_name',
        'logo',
        'status',
        'parent_id',
    ];
   protected $casts = [
    'status' => Status::class,
];
    public function parent()
    {
        return $this->belongsTo(ServiceCategory::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(ServiceCategory::class, 'parent_id');
    }

    public function carTypes()
    {
        return $this->hasMany(CarType::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Enums\Status;
class Driver extends Model
{
    protected $fillable = [
        'full_name',
        'email',
        'password',
        'phone',
        'image',
        'gender',
        'assign_to_sub_admin_id',
    ];

    protected $hidden = [
        'password',
    ];
protected $casts = [
    'status' => Status::class,
];
    public function subAdmin()
    {
        return $this->belongsTo(User::class, 'assign_to_sub_admin_id');
    }
}

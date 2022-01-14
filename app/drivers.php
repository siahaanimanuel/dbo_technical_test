<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class drivers extends Model
{
    protected $table="drivers";
    protected $fillable = [
        'id',
        'name',
        'email',
        'phone',
        'address',
        'gender',
        'car_name',
        'car_capacity',
        'vehicle_registration_number',
        'type_vehicle_registration_number'
    ];
}

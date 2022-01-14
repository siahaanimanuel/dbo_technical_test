<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class orders extends Model
{
    protected $table="orders";
    protected $fillable = [
        'id',
        'id_driver',
        'pickup_time',
        'pickup_address',
        'shipper_name',
        'shipper_phone',
        'drop_address',
        'receiver_name',
        'receiver_phone',
        'order_type',
        'quantity',
        'notes',
        'date',
        'price',
        'pickup_photo',
        'received_photo',
        'fee_status',
        'delivery_status'
    ];
}

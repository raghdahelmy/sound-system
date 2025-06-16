<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderEequipment extends Model
{
    //
     protected $fillable = [
        'order_id',
        'equipment_id',
        'quantity',
        'returned_quantity',
        'status',
    ];
}

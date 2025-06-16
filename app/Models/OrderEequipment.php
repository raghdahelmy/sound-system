<?php

namespace App\Models;

use App\Models\Equipment;
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
    public function equipment()
    {
        return $this->belongsTo(Equipment::class);
    }

     public function order()
    {
        return $this->belongsTo(Order::class);
    }

     public function log(){
        return $this->hasMany(Log::class);
    }
}

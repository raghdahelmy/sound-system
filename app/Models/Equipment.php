<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    //
     protected $fillable = [
        'name',
        'category',
        'status',
        'serial_number',
        'quantity',
    ];

    public function orderEquipments()
    {
        return $this->hasMany(OrderEequipment::class);
    }
}

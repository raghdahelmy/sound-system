<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    //
     protected $fillable = [
        'order_equipment_id','action_by','action_type','timestamps',
    ];
    public function OrderEequipment(){
        return $this->belongsTo(OrderEequipment::class);
    }
     public function user(){
        return $this->belongsTo(User::class,'action_by');
    }

}

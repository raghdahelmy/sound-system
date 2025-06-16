<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //

    protected $fillable = [
        'user_id', 'status', 'event_name','event_date','invoice_number','total_price','timestamps',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function orderEequipment(){
        return $this->hasMany(OrderEequipment::class);
    }

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        "user_id","address_id","payment_id",
    ];

    public function user() {
        return $this -> belongsTo(User::class);
    }
    
    public function address() {
        return $this -> belongsTo(Address::class);
    }
    
    public function payment() {
        return $this -> belongsTo(Payment::class);
    }
}

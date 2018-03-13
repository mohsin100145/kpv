<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PayableByCustomer extends Model
{
    protected $table = 'payable_by_customers';

    public function reservation()
    {
    	return $this->belongsTo(RoomReservation::class, 'reservation_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RoomReservation extends Model
{
    protected $table = 'room_reservations';

    public function room()
    {
    	return $this->belongsTo(Room::class);
    }

    public function customer()
    {
    	return $this->belongsTo(Customer::class);
    }
}

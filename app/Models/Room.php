<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $table = 'rooms';

    public function roomCategory()
    {
        return $this->belongsTo(RoomCategory::class, 'category_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    //
    protected $fillable = [
        'room_name',
        'room_price',
        'room_quantity',
        'room_available',
        'status',
    ];
}

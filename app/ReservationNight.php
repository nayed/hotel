<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReservationNight extends Model
{
    protected $fillable = ['rate', 'date', 'room_type_id'];

    public function Reservation()
    {
        return $this->hasOne('App\Reservation');
    }

    public function RoomType()
    {
        return $this->hasOne('App\RoomType');
    }
}

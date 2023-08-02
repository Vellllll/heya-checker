<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReservationDone extends Model
{
    use HasFactory;
    protected $table = 'tblreservasidone';

    public static function getAllReservationDone(){
        $result = ReservationDone::get();
        return $result;
    }
}

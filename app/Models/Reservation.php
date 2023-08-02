<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    protected $table = 'tblreservasi';

    public static function getAllReservation(){
        $result = Reservation::get();
        return $result;
    }

    public static function getReservationDetail($id){
        $data = Reservation::where("id", $id)->first();
        return $data;
    }
}

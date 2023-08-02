<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
    use HasFactory;
    protected $table = 'tblrumahsakit';

    public static function getAllHospital(){
        $result = Hospital::get();
        return $result;
    }

    // dd($from_model['nama']);

    public static function getHospitalDetail($id){
    // SELECT * FROM mahasiswa WHERE id = $id
    $data = Hospital::where("id", $id)->first();
    // $data = Hospital::findOrFail($id);
    return $data;
  }
}

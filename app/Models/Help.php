<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Help extends Model
{
    use HasFactory;
    protected $table = 'tblhelp';

    public static function getAllHelp(){
        $result = help::get();
        return $result;
    }

    public static function gethelpDetail($id){
        $data = Help::where("id", $id)->first();
        return $data;
    }
}

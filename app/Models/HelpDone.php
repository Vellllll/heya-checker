<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HelpDone extends Model
{
    use HasFactory;
    protected $table = 'tblhelpdone';

    public static function getAllHelpDone(){
        $result = HelpDone::get();
        return $result;
    }
}

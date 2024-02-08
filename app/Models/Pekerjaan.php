<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use DB;

class Pekerjaan extends Model
{
    use HasFactory;

    public static function getData(){
        return DB::table('tdmasterwork')->get();
    }
}

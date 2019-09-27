<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Members extends Model
{
    protected $table = 'members';
    public static function getList(){
        return DB::table('members')
        //->where('year',59)
        ->get();
        //return 2;
    }
    public static function WhWomen(){
        return DB::table('members')
        ->where('gender','หญิง')
        ->get();
    }
}

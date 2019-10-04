<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;

class Members extends Model
{
    protected $table = 'members';
    public static function getAll(){
        return DB::table('members')
        ->get();
    }
    public static function WhWomen(){
        return DB::table('members')
        ->where('gender','หญิง')
        ->get();
    }
}

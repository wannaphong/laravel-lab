<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;

class Prouducts extends Model
{
    //
    public static function getType(){
        return DB::table('type')
            ->get();
    }
    public static function addProducts($data){
        return DB::table('products')->insert($data);
    }
}

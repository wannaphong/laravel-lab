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
    public static function getProducts(){
        return DB::table('products')
        ->join('type','type.type_id','products.type_id') // เอา type.type_id มาเปรียบเทียบกับ products.type_id
            ->get();
    }
    public static function addProducts($data){
        return DB::table('products')->insert($data);
    }
}

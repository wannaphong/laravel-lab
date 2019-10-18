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
    public static function getProducts($id=null){
        if($id==null){
        return DB::table('products')
        ->join('type','type.type_id','products.type_id') // เอา type.type_id มาเปรียบเทียบกับ products.type_id
            ->get();
        }
        else{
            return DB::table('products')
        //->join('type','type.type_id','products.type_id') // เอา type.type_id มาเปรียบเทียบกับ products.type_id
        ->where('product_id',$id)
        ->first();
        }
    }
    public static function addProducts($data){
        return DB::table('products')
        ->insert($data);
    }
    public static function updateProducts($data,$product_id){
        return DB::table('products')
        ->where('product_id',$product_id)
        ->update($data);
    }
}

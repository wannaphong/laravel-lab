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
    public static  function getlisty(){
        return DB::table('generation')->get();
    }
    public static function getyear($id){
        return DB::table('members')
        ->where('year',$id)
        ->get();
    }
    public static function getM($id){
        return DB::table('members')
        ->where('member_id',$id)
        ->get();
    }
    public static function addGen($data){
        return DB::table('generation')->insert($data);
    }
    public static function addMembers($data){
        return DB::table('members')->insert($data);
    }
}

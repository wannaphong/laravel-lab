<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Professor extends Model
{
    public static function getAll(){
        return DB::table('professor')
        ->join('branch','branch.branch_id','professor.branch_id')
        ->get();
    }
}

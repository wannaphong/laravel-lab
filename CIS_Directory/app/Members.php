<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Members extends Model
{
    protected $table = 'members';
    public static function getList(){
        return DB::table('members')->get();
        //return 2;
    }
}

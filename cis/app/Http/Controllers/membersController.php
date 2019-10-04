<?php

namespace App\Http\Controllers;
use App\Members as member;

use Illuminate\Http\Request;

class membersController extends Controller
{
    //
    public function getMember(){
        //dd("ok");
        $member_all = member::getAll();
        //$date
        dd($member_all);
    }
}

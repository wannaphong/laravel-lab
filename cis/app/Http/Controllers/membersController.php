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
        $data=array('member'=>$member_all);
        return view('member',$data);
        //dd($member_all);
    }
}

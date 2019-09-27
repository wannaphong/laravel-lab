<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Members as member;
use Illuminate\View\View;


class MembersController extends Controller
{
    public function getList(){
       /// dd('ok');
       $member = member::getList();
       //dd($member);
       return view('show',['members'=>$member]);
    }
    public function getWomen(){
        /// dd('ok');
       $member = member::WhWomen();
       //dd($member);
       return view('show',['members'=>$member]);
    }
}

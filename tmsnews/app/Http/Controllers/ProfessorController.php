<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Professor as Pro;
use Illuminate\Support\Facades\Auth;
//use Auth;

class ProfessorController extends Controller
{
    //
    public function getPro(){
        $pro = Pro::getAll();
        //dd($pro);
        $data = array('pro'=>$pro);
        if(Auth::user()->level=='admin') // admin เท่านั้นที่ทำเงื่อนไขนี้ได้
        {
            return view('professor',$data);
        }
        else{ // user ธรรมดา
            return view("welcome");
        }
    }
}

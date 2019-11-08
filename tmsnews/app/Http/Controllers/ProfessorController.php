<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Professor as Pro;

class ProfessorController extends Controller
{
    //
    public function getPro(){
        $pro = Pro::getAll();
        //dd($pro);
        $data = array('pro'=>$pro);
        return view('professor',$data);
    }
}

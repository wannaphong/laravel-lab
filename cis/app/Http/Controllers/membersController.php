<?php

namespace App\Http\Controllers;
use App\Members as member;
use DB;
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
    public function getView_member($m_id){
        $member_all = member::getM($m_id);
        $data=array('member'=>$member_all);
        return view('member',$data);
    }
    public static function Add_members(Request $request){ // Get POST
        dd($request->all());
        $first_name = $request->first_name;
        $last_name=$request->last_name;
        $nick_name=$request->nick_name;
        $gender=$request->gender;
        $phone=$request->phone;
        $email=$request->email;
        $img_url=$request->img_url;
        $year=$request->year;
       /* DB::table('members')->insert([
            [
                'first_name'=>$first_name,
                'last_name'=>$last_name,
                'nick_name'=>$nick_name,
                'gender'=>$gender,
                'phone'=>$phone,
                'email'=>$email,
                'img_url'=>$img_url,
                'year'=>$year
            ]
        ]);*/
        return '0';
    }
}

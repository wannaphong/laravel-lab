<?php

namespace App\Http\Controllers;
use App\Members as member;
use DB;
use Illuminate\Http\Request;

class membersController extends Controller
{
    //
    public function index2()
    {
        $data1=DB::table('generation')->get();
        $data=array('member'=>$data1);
        return view('welcome',$data);
    }
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
    public function getView_year($m_id){
        $member_all = member::getyear($m_id);
        $data=array('member'=>$member_all);
        return view('member',$data);
    }
    public function postGen(Request $request){
        //dd($request->all());
        $year=$request->input('year');
        $gen_count=$request->input('gen_count');

        $data= array('year'=>$year,'gen_count'=>$gen_count);
        $add=member::addGen($data);

    }
    public function Add_members(Request $request){ // Get POST
        //$device = new Device();
        //dd($request->all());
        $first_name = $request->first_name;
        $last_name=$request->last_name;
        $nick_name=$request->nick_name;
        $gender=$request->gender;
        $phone=$request->phone;
        $email=$request->email;
        $img_url=$request->img_url;
        $year=$request->year;
        $data=array(
                'first_name'=>$first_name,
                'last_name'=>$last_name,
                'nick_name'=>$nick_name,
                'gender'=>$gender,
                'phone'=>$phone,
                'email'=>$email,
                'img_url'=>$img_url,
                'year'=>$year
        );
        $add=member::addMembers($data);
    }
}

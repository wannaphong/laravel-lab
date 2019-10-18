<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Prouducts as Prod;

class ProuductsController extends Controller
{
    //
    public function getForm(){

        $type_data=Prod::getType();
        $data=array('type'=>$type_data);
        //dd($type_data);
        return view('form_add',$data);
    }
    public function postForm(Request $req){
        $prouduct_name=$req->input("product_name");
        $price=$req->input("price");
        $type_id=$req->input("type_id");
        //dd($prouduct_name,$price,$type_id);
        $data=array('product_name'=>$prouduct_name,'price'=>$price,'type_id'=>$type_id);
        $add=Prod::addProducts($data);
    }
}

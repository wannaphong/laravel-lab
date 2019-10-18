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

        return redirect("product_list");
    }
    public function updateForm(Request $req){
        $prouduct_name=$req->input("product_name");
        $price=$req->input("price");
        $type_id=$req->input("type_id");$pro_id=$req->input("product_id");
        //dd($prouduct_name,$price,$type_id);
        $data=array('product_name'=>$prouduct_name,'price'=>$price,'type_id'=>$type_id);
        $add=Prod::updateProducts($data,$pro_id);

        return redirect("product_list");
    }
    public function getProuducts(){
        $Prouduct_data=Prod::getProducts();
        $data=array('products'=>$Prouduct_data);
        //dd($data);
        return view('product_list',$data);
    }
    public function editProuducts($id){
        $Prouduct_data=Prod::getProducts($id);
        $type=Prod::getType();
        $data=array('products'=>$Prouduct_data,'type'=>$type);
        //dd($data);
        return view('edit_pro',$data);
    }
}

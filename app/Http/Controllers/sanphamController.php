<?php

namespace App\Http\Controllers;

use App\Models\sanphamModel;
use Illuminate\Http\Request;

class sanphamController extends Controller
{
    //lay san pham
    public function getsp(){
       $data = sanphamModel::getallsp();
     // dd($data);
     return view('view_customer.product',['data'=>$data]);
    }

    public function product_detail($id){
      $data = sanphamModel::product_detail($id);
      //dd($data['product']);
      return view('view_customer.product_detail',
      ['product'=>$data['product'],
      'color'=> $data['color'],
      'memory'=> $data['memory']]);
    }
  // lay api by id san pham
    public function get_product_by_id($id){
      $data = sanphamModel::product_detail($id);
      return json_encode($data);

    }



}

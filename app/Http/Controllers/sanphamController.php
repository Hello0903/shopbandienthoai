<?php

namespace App\Http\Controllers;

use App\Models\sanphamModel;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Location;

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
    // insert database
    public function create_bill(Request $request){
      $name = $request->name;
      $phone = $request->phonenumber;
      $adress = $request->address;
      $idpro = $request->id_product;
      $color = $request->color;
      $memory = $request->memory;
     $notice =  sanphamModel::create_bill($name,$adress,$phone,$idpro,$color,$memory);
     if($notice == 0){
       echo '<script>alert("Lỗi hệ thống xảy ra mong bạn thông cảm")</script>';
     } 
     if($notice == 1){
      echo '<script>alert("Đơn đặt hàng của bạn thành công"); window.location.replace("http://localhost:8080/shopbandienthoai");</script>';
      
     }
    }


}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class sanphamModel extends Model
{ protected $table = 'sanpham';
    use HasFactory;
    public static function getallsp(){
       $data = DB::table('sanpham')->get();
       $obj = [];  
       $arr = array();
       foreach($data as $item){
        $mausac = DB::table('mausac')->where('mausac.id','=',$item->id_mamau)->first();
        $dungluong = DB::table('dungluong')->where('dungluong.id','=',$item->id_dungluong)->first();
        $obj = [
           'id' => $item->id,
           'ten'=> $item->ten,
            'anh'=> $mausac->anh,
            'id_mausac' => $mausac->id,
            'id_dungluong' => $dungluong->id,
            'giatien'=> $dungluong->giatien,
            'dungluong'=> $dungluong->dungluong

        ];
        array_push($arr,$obj);

       } 
 
       return $arr;
    }


    public static function product_detail($id){
        $product = DB::table('sanpham')->where('sanpham.id','=',$id)->first();
        if(!isset($product)) return -1;

        $color = DB::table('mausac')->where('mausac.id','=',$product->id_mamau)->get();
        $memory = DB::table('dungluong')->where('dungluong.id','=',$product->id_dungluong)->get();

        return ['product'=>$product,'color'=>$color,'memory'=>$memory];
    }

    public static function create_bill($name,$adress,$phone,$idsp,$id_color,$memory){
        $hd = DB::table('hoadon')->orderBy('id','desc')->first();
        $id = 0;
        if($hd == null)  $id = 0;
        else {$id = ($hd->id);
            $id = $id +1;
        }
        // echo $id;
        DB::table('hoadon')->insert([
               'id' => $id,
               'idsanpham' => $idsp,
               'mausp' => $id_color,
               'dungluong' => $memory,
               'giatien' => $id,
               'tenkh' => $name,
               'diachi' => $adress,
               'sodienthoai' => $phone, 
               'ghichu' => 'abc'


        ]);
        // check;
        $hd = DB::table('hoadon')->orderBy('id','desc')->first();
        if($id == ($hd->id)){
            // echo "1";
            return 1;
        }
        else return 0;
    }
    
    
}

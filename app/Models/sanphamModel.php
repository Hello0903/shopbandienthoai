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

    
}

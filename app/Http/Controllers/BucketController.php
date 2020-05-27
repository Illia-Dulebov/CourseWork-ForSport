<?php

namespace App\Http\Controllers;

use App\Goods;
use App\Bucket;
use App\Category;
use Illuminate\Http\Request;

class BucketController extends Controller {
    public function addToBucket($id){
        $cats = Category::all();
        for($i = 0; $i < count($cats); $i++){
            if($id == $cats[$i]->latin_url){
                return redirect()->action('CategoryController@categoryShowGoodsOrGood', ['info' => $id]);
            }
        }

        $tovar = new Bucket();
        $tovar->goods_id = $id;
        $tovar->quantity = 1;
        $tovar->user_ip = $_SERVER['REMOTE_ADDR'];
        $tovar->save();

        $ip = $_SERVER['REMOTE_ADDR'];
        $arr_goods = array();
        $bucket_for_user = Bucket::where('user_ip', 'like', "%$ip%")->get();
        for($i = 0; $i < count($bucket_for_user); $i++){
            array_push($arr_goods, Goods::find($bucket_for_user[$i]->goods_id));
        }
        $price_all = 0;
        $quantity_all= 0;

        return view('bucket', ['bucket_for_user'=>$bucket_for_user, 'arr_goods'=>$arr_goods,
            'price_all'=>$price_all, 'quantity_all'=>$quantity_all]);

    }

    public function makeOrderFromBucket() {
        return view('order1');
    }

    public function createOrderOne($id){
        $item = Goods::find($id);
        if ($item){
            return view('order', ['good' => $item]);
        }
    }

    public static function BucketShow(){
        $ip = $_SERVER['REMOTE_ADDR'];
        $arr_goods = array();
        $bucket_for_user = Bucket::where('user_ip', 'like', "%$ip%")->get();
        for($i = 0; $i < count($bucket_for_user); $i++){
            array_push($arr_goods, Goods::find($bucket_for_user[$i]->goods_id));
        }
        $price_all = 0;
        $quantity_all= 0;

        return view('bucket', ['bucket_for_user'=>$bucket_for_user, 'arr_goods'=>$arr_goods,
            'price_all'=>$price_all, 'quantity_all'=>$quantity_all]);
    }

    public static function deleteFromBucket($id){
        $cats = Category::all();
        for($i = 0; $i < count($cats); $i++){
            if($id == $cats[$i]->latin_url){
                return redirect()->action('CategoryController@categoryShowGoodsOrGood', ['info' => $id]);
            }
        }
        $ip = $_SERVER['REMOTE_ADDR'];
        $items_to_delete = Bucket::where('user_ip', '=', $ip)->where('id', '=', $id)->delete();

        $arr_goods = array();
        $bucket_for_user = Bucket::where('user_ip', 'like', "%$ip%")->get();
        for($i = 0; $i < count($bucket_for_user); $i++){
            array_push($arr_goods, Goods::find($bucket_for_user[$i]->goods_id));
        }
        $price_all = 0;
        $quantity_all= 0;

        return view('bucket', ['bucket_for_user'=>$bucket_for_user, 'arr_goods'=>$arr_goods,
            'price_all'=>$price_all, 'quantity_all'=>$quantity_all]);
    }

    public static function addQuantity($id){
        $ip = $_SERVER['REMOTE_ADDR'];
        $tovar = Bucket::where('user_ip', '=', $ip)->where('id', '=', $id)->update(['quantity'=> $_GET["amount"]]);
        return redirect()->action('BucketController@BucketShow');
    }

}

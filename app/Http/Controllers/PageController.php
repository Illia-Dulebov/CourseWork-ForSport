<?php

namespace App\Http\Controllers;

use App\Goods;
use App\Category;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function ContactsShow(){
        return view('contacts');
    }
    public function AboutUsShow(){
        return view('aboutus');
    }
    public function infoShow(){
        return view('information');
    }
    public function PaymentShow(){
        return view('payment');
    }
    public function GarantiaShow(){
        return view('garantia');
    }
    public function DeliveryShow(){
        return view('delivery');
    }
    public function SearchControll(){
        $search_item = mb_strtolower($_GET['q']);
        $prod = Goods::where('name', 'like', "%$search_item%")->get();
        if(count($prod) != 0){
            $category = Category::where('id', 'like', $prod[0]->goods_cat_id)->get();
            return view('goods', ['goods'=>$prod, 'name'=> $category[0]->cat_name]);
        }
        else{
            return view('not_found');
        }
    }
}

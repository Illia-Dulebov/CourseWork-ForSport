<?php

namespace App\Http\Controllers;

use App\Goods;
use Illuminate\Http\Request;

class GoodsController extends Controller
{
    public function showSales(){
        $sales = Goods::where('sale', 'like', '1')->get();
        if ($sales) {
            return view('sales', ['sales'=>$sales]);
        }
    }
    public function showSalesAndPopular(){
        $sales = Goods::where('sale', 'like', '1')->get();
        $popular = Goods::where('hits', 'like', '1')->get();
        if ($sales && $popular) {
            return view('SalesAndPopular', ['sales'=>$sales, 'popular'=>$popular]);
        }
    }
}

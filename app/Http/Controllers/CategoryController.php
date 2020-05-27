<?php

namespace App\Http\Controllers;

use App\Category;
use App\Goods;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function categoryShowGoodsOrGood($info){
        if(ctype_digit($info)){
            $product = Goods::find($info);
            $cat_id = $product->goods_cat_id;
            $similars = Goods::where('goods_cat_id', 'like', "$cat_id")->get();
            if ($product) {
                return view('product', ['product'=>$product, 'similars'=>$similars]);
            }
        }
        else {
            $category = Category::where('latin_url', 'like', "%$info%")->get();
            if ($category){
                $goods = Goods::where('goods_cat_id', 'like', $category[0]->id)->get();
                return view('goods', ['goods'=> $goods, 'name'=> $category[0]->cat_name]);
            }
        }
    }
}

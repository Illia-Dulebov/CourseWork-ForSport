<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Goods;
use App\Order;
use App\OrderGoods;
use App\Bucket;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function addOrderAndCustomer($id){
        $customer = new Customer();
        $customer->name = $_POST["name"];
        $customer->surname = $_POST["surname"];
        $customer->middle_naadme = $_POST["fname"];
        $customer->phone = $_POST["phone"];
        $customer->email = $_POST["email"];
        $customer->address = $_POST["address"];
        $customer->save();

        $order = new Order();
        $order->order_id = random_int(1000, 5000);
        $order->customer_id = $customer->id;
        $order->save();

        $goods_in_order = new OrderGoods();
        $goods_in_order->good_id = $id;
        $goods_in_order->order_id = $order->order_id;
        $goods_in_order->quantity = $_POST["amount"];
        $goods_in_order->save();

        $price = Goods::find($id)->price;
        $price = $price * $_POST["amount"];

        return view('end-order', ['order_id'=> $order->order_id, 'price'=>$price]);
    }

    public static function addOrderAndCustomerFromBucket(){
        $ip = $_SERVER['REMOTE_ADDR'];
        $buck = Bucket::where('user_ip', 'like', "%$ip%")->get();

        $customer = new Customer();
        $customer->name = $_POST["name"];
        $customer->surname = $_POST["surname"];
        $customer->middle_name = $_POST["fname"];
        $customer->phone = $_POST["phone"];
        $customer->email = $_POST["email"];
        $customer->address = $_POST["address"];
        $customer->save();

        $order = new Order();
        $order->order_id = random_int(1000, 5000);
        $order->customer_id = $customer->id;
        $order->save();

        for($i = 0; $i < count($buck); $i++){
            $goods_in_order = new OrderGoods();
            $goods_in_order->good_id = $buck[$i]->goods_id;
            $goods_in_order->order_id = $order->order_id;
            $goods_in_order->quantity = $buck[$i]->quantity;
            $goods_in_order->save();
        }

        $ip = $_SERVER['REMOTE_ADDR'];
        $tovar = Bucket::where('user_ip', '=', $ip)->delete();
        return view('end-order', ['order_id'=> $order->order_id]);
    }
}

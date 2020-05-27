<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';

    public function goods(){
        return $this->belongsToMany('App\Goods', 'goods_orders')->withPivot('amount');
    }
}

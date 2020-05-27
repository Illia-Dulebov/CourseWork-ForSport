@extends('layouts.main')
@section('content')
    <div class="top-line">
        <p class="sale">Товар</p>
        <p class="sale"><img src="{{ asset('images/line.png') }}" width="95%"></p>
    </div><br>
<div class="product">
    <div class="product-info">
        <h1>{{$product->name}}</h1><br>
        <div class="manufacture-info">
            <p>✔️ Теги: {{$product->keywords}}<br></p>
            <p>⭐⭐⭐⭐⭐ 10 відгуків</p>
        </div>
        <div class="product-img">
            <img src="/images/{{$product->img}}">
        </div>
    </div>
    <div class="product-buy">
        <h2>Ціна: ₴ {{$product->price}}</h2><hr>
        @if($product->visible)
            <p>Доступність: На складі</p><hr>
            <button onclick="location.href='/make-order-one/{{$product->id}}'" type="submit" class="btn-buy">Купити</button><br>
            <form method="get" action="/add-to-cart/{{$product->id}}">
                <div class="add-to-cart">
                    <input type="submit" value="🛒 В кошик" class="cart-button">
                </div>
            </form><br><br><br><hr>
        @else
            <p>Доступність: Немає</p><hr>
        @endif
        <h3>Опис:</h3><br>
        <p>{{$product->description}}</p><hr>
        <h3>Доставка</h3><br>
                <div class="delivery1">
                    <img src="https://bluemountainfengshui.org/wp-content/uploads/2015/05/NovaPoshta2.jpg">
                    <img src="https://posylka.net/uploads/couriers/large/ukrposhta.png">
                    <img src="https://images.ua.prom.st/879161237_w640_h640_besplatnaya-dostavka-po.jpg">
                </div>
    </div>
</div>
<div class="products">
    <div class="top-line">
        <p class="sale">Схожі товари</p>
        <p class="sale"><img src="{{ asset('images/line.png') }}" width="95%"></p>
    </div><br>
    <div class="product-roster">
                @for($j = 0; $j < 3; $j++)
                    <?php
                    $rand_tovar = random_int(0, count($similars)-1);
                    ?>
                        <div class="product-item">
                            <div class="product-img">
                                <a href="{{$similars[$rand_tovar]->id}}">
                                    <img src="images/{{$similars[$rand_tovar]->img}}">
                                </a>
                            </div>
                            <div class="product-list">
                                <h3>{{$similars[$rand_tovar]->name}}</h3>
                                <span class="price">₴ {{$similars[$rand_tovar]->price}}</span>
                                <div class="actions">
                                    @if($similars[$rand_tovar]->visible)
                                        <div class="add-to-cart">
                                            <a href="add-to-cart/{{$similars[$rand_tovar]->id}}" class="cart-button">В кошик</a>
                                        </div>
                                    @else
                                        <h3>Доступність: немає</h3>
                                    @endif
                                </div>
                                <div class="add-to-links">
                                    @if($similars[$rand_tovar]->hits)
                                        <img style="margin-top: -190px;" height="40" width="100" src="{{ asset('images/hit1.png') }}">
                                    @else
                                        <img style="margin-top: -190px; margin-bottom: 5px" height="40" width="100" src="{{ asset('images/hit2.png') }}">
                                    @endif
                                </div>
                            </div>
                        </div>
                @endfor
    </div>
</div>
@endsection

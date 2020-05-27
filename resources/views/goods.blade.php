@extends('layouts.main')
@section('content')
    <div class="products">
        <div class="top-line">
            <p class="sale">{{$name}}</p>
            <p class="sale"><img src="{{ asset('images/line.png') }}" width="95%"></p>
        </div>
        <div class="product-roster">
            @for($i = 0; $i < 3; $i++)
                    @for($j = 0; $j < 3; $j++)
                        <?php
                        $rand_tovar = random_int(0, count($goods)-1);
                        ?>
                            <div class="product-item">
                                <div class="product-img">
                                    <a href="{{$goods[$rand_tovar]->id}}">
                                        <img src="/images/{{$goods[$rand_tovar]->img}}">
                                    </a>
                                </div>
                                <div class="product-list">
                                    <h3>{{$goods[$rand_tovar]->name}}</h3>
                                    <span class="price">₴ {{$goods[$rand_tovar]->price}}</span>
                                    <div class="actions">
                                        @if($goods[$rand_tovar]->visible)
                                        <div class="add-to-cart">
                                            <a href="add-to-cart/{{$goods[$rand_tovar]->id}}" class="cart-button">В кошик</a>
                                        </div>
                                        @else
                                            <h3>Доступність: немає</h3>
                                        @endif
                                    </div>
                                    <div class="add-to-links">
                                        @if($goods[$rand_tovar]->hits)
                                            <img style="margin-top: -190px;" height="40" width="100" src="{{ asset('images/hit1.png') }}">
                                        @else
                                            <img style="margin-top: -190px; margin-bottom: 5px" height="40" width="100" src="{{ asset('images/hit2.png') }}">
                                        @endif
                                    </div>
                                </div>
                            </div>
                    @endfor
            @endfor
        </div>
    </div>
@endsection

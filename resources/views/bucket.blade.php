@extends('layouts.main')
@section('content')
    @if(count($arr_goods) != 0)
    <div class="basket">
        <div class="top-line">
            <p class="sale">Кошик</p>
            <p class="sale"><img src="{{ asset('images/line.png') }}" width="95%"></p>
            <br>
        </div>
        @for($j = 0; $j < count($arr_goods); $j++)
        <div class="table-head">
            <table cellspacing=0 border=0 width=100%>
                <tr bgcolor="#fafbfc">
                    <td height=30 width=50%><p>Товар</p></td>
                    <td align="center" height=30 width=14%><p>Ціна</p></td>
                    <td align="center" height=30 width=14%><p>Кількість</p></td>
                    <td align="center" height=30 width=14%><p>Сума</p></td>
                </tr>
            </table>
        </div>
        <div class="bskt-prd">
            <div class="bskt-prd-info">
                <img align="left" class="bskt-prd-img" src="/images/{{$arr_goods[$j]->img}}">
                <h3>{{$arr_goods[$j]->name}}</h3><hr>
                <p>{{$arr_goods[$j]->keywords}}</p>
                <div class="del-from-cart">
                    <a href="/delete-from-cart/{{$bucket_for_user[$j]->id}}" class="x-button">Видалити</a>
                </div>
            </div>
            <div class="bskt-prd-def">
                <h2>₴ {{$arr_goods[$j]->price}}</h2>
            </div>
            <div class="bskt-prd-def">
                <h2>{{$bucket_for_user[$j]->quantity}} шт.</h2><br>
                @csrf
                <form method="get" action="/add-quantity/{{$bucket_for_user[$j]->id}}">
                    <input type="number" min="1" name="amount"required>
                    <input type="submit" value="ОК">
                </form>
            </div>

            <div class="bskt-prd-def">
                <h2>{{$price_goods = $bucket_for_user[$j]->quantity * $arr_goods[$j]->price}}</h2>
            </div>
            <p hidden="true">{{$price_all += $price_goods}}{{$quantity_all += $bucket_for_user[$j]->quantity}}</p>
        </div><br>
        @endfor
        <div class="result">
            <h1>Всього: ₴ {{$price_all}}</h1>
            <hr>
            <h2>Кількість: {{$quantity_all}}</h2>
            <button type="submit" onclick="location.href='/make-order-from-bucket'" class="btn-buy">Оформити замовлення</button><br>
        </div>
    </div>
    @else
        <div class = "sorry">
            <h1>В корзині немає товарів! Це легко виправити, у нашому магазині для кожного щось знайдеться.</h1>
        </div>
    @endif
@endsection

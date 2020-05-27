@extends('layouts.main')
@section('content')
    <div class="payment">
        <div class="top-line">
            <p class="sale">Оплата</p>
            <p class="sale"><img src="{{ asset('images/line.png') }}" width="95%"></p>
        </div><br>
        <h3 style="text-align: center;">Готівка</h3>
        <h2 style="text-align: center;">Розрахуватися готівкою можна в нашому магазині за адресою: м Київ,<br>
            вул. Страждань, 66 і при доставці замовлення кур'єром на вашу адресу.<br>
            Оплата приймається тільки в гривнях.</h2>
        <h3 style="text-align: center;">Visa / Mastercard</h3>
        <h2 style="text-align: center;">Оплатити можна онлайн банківською картою Visa або MasterCard за<br>
            допомогою системи миттєвих платежів LiqPAY відразу після оформлення<br>
            замовлення на сайті. Також картою можна розрахуватися в нашому магазині.</h2>
        <ul class="hr">
            <li><img src="{{ asset('images/nal.png') }}" width="524" height="358"></li>
            <li><img src="{{ asset('images/kart.png') }}" width="524" height="358"></li>
        </ul>
    </div>
@endsection

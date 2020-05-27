@extends('layouts.main')
@section('content')
    <div class="delivery">
        <div class="top-line">
            <p class="sale">Доставка</p>
            <p class="sale"><img src="{{ asset('images/line.png') }}" width="95%"></p>
        </div><br>
        <h3 style="text-align: center;">Доставка з магазину</h3>
        <h2 style="text-align: center;">Замовлення можна забрати з нашого магазину за адресою:<br>
            м Київ, вул. Страждань, 66. Тут можна оглянути товар і поміряти його.<br>
            Доставка замовлення в магазин буде безкоштовною.<br>
            Резерв на вивезення товару з магазину - 3 дні.</h2>
        <h3 style="text-align: center;">Доставка поштою</h3>
        <h2 style="text-align: center;">Замовлення можна доставити кур'єром або на відделення Нової пошти.<br>
            Для уточнення інформації дзвоніть за телефонами або пишіть на пошту.</h2><br>
        <ul class="hr">
            <li><img src="{{ asset('images/pochta1.png') }}" width="294" height="158"></li>
            <li><img src="{{ asset('images/pochta2.png') }}" width="294" height="158"></li>
            <li><img src="{{ asset('images/pochta3.png') }}" width="224" height="158"></li>
        </ul>
    </div>
@endsection

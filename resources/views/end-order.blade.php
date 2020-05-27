@extends('layouts.main')
@section('content')
    <div class = "sorry">
        <h1>Ваше замовлення готове, чекайте дзвінка від нашого оператору!</h1>
        <h1>Ваш номер заказу: {{$order_id}}</h1>
    </div>
    <div class="return">
        <button onclick="location.href='/'" type="submit" class="btn-buy">Повернутися на головну</button><br>
    </div>
@endsection

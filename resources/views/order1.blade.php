@extends('layouts.main')
@section('content')
    <form action="/add-order-from-bucket" method="post">
        @csrf
    <div class="buy-form">
        <div class="top-line">
            <p class="sale">Оформлення замовлення</p>
            <p class="sale"><img src="{{ asset('images/line.png') }}" width="95%"></p>
        </div><br><br>
        <h3>Контактна інформація</h3><hr>
        <p style="color:#0C7FB0;">Корректність заповнення контактних даних впливає на можливість відправлення вашого замовлення.</p><br><br>
        <label for="email"><b>Електронна пошта:</b></label>
        <input type="email" placeholder="Введіть пошту" name="email" required>
        <label for="text"><b>Телефон:</b></label>
        <input type="text" placeholder="Введіть телефон" name="phone" required>
        <label for="name"><b>Ім'я:</b></label>
        <input type="text" placeholder="Введіть ім'я" name="name" required>
        <label for="surname"><b>Прізвище:</b></label>
        <input type="text" placeholder="Введіть прізвище" name="surname" required>
        <label for="fathername"><b>По-батькові:</b></label>
        <input type="text" placeholder="Введіть по-батькові" name="fname" required>
        <label for="adress"><b>Адреса:</b></label>
        <input type="text" placeholder="Введіть адресу" name="address" required><hr>

        <p>Підтверджуючи замовлення ви погоджуєтеся з нашими <a href="#">Умовами Конфеденційності</a>.</p>
        <input type="submit" class="registerbtn" value="Оформити замовлення"><br>
    </div>
    </form>
@endsection

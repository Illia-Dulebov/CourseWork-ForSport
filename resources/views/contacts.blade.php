@extends('layouts.main')
@section('content')
        <div class="top-line">
            <p class="sale">Контакти</p>
            <p class="sale"><img src="{{ asset('images/line.png') }}" width="95%"></p>
        </div><br>
        <div class="contacts-page">
        <h3>Способи зв'язку :</h3>
        <h2>(096) 145 72 55</h2>
        <h2>(096) 388 23 11</h2>
        <h2>Email: forsport@gmail.com</h2>
        <h3>Магазин:</h3>
        <h2>Київ, вул. Страждань, 66</h2>
        <h3>Графік роботи:</h3>
        <h2>Пн - Пт: 10:00 - 20:00</h2>
        <h2>Сб - Нд: 11:00 - 18:00</h2>
            <h3 style="text-align: center;">Карти</h3><br>
            <div class="map-responsive">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d162758.47733428518!2d30.392609164932708!3d50.40195139701604!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4cf4ee15a4505%3A0x764931d2170146fe!2z0JrQuNC10LIsIDAyMDAw!5e0!3m2!1sru!2sua!4v1590165171444!5m2!1sru!2sua" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        <p class="warning">
            Так як в магазині асоритмент дуже широкий, не має можливості розмістити всі товари в магазині,
            з приводу продажу деяких товарів уточнюйте за телефоном або через пошту.
        </p>
    </div>
@endsection

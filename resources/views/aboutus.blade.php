@extends('layouts.main')
@section('content')
        <div class="top-line">
            <p class="sale">Про нас</p>
            <p class="sale"><img src="{{ asset('images/line.png') }}" width="95%"></p>
        </div><br><br>
        <div class="about">
        <h2>Магазин ForSport існує на ринку туристичного спорядження вже більше 5 років.</h2>
        <h2>Все почалося з наших інтересів. Ми часто ходили в походи в гори, каталися на лижах,
            займалися велотуризмом та фітнесом. Сама назва Forsport каже сама за себе, ми підготуємо
            вас до занять з будь-якого виду спорту.</h2>
        <h2>Сьогодні наш магазин може запропонувати більше 100000 товарів високої якості, які можуть
            задовольнити будь-які потреби наших клієнтів. Ми пропонуємо товари перевірених часом бренди,
            які ми також використовуємо під час наших подорожей та спортивних івентів.</h2>
        <h2>У нас ви можете купити:</h2>
        <h2>1) фітнес спорядження;<br>
            2) велотовари<br>
            3) одяг<br>
            4) спорт-товари<br>
            <h2>Та багато іншого!</h2>
            <h3>Наш магазин</h3>
            <ul class="hr">
                <li><img src="{{ asset('images/shop1.jpg') }}" width="524" height="358"></li>
                <li><img src="{{ asset('images/shop2.jpg') }}" width="524" height="358"></li>
            </ul>
            <h3>Приєднуйся до нашої родини задоволених  покупців!</h3>
    </div>
@endsection

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ForSport</title>
    <link rel="stylesheet" href="{{ URL::to('/css/style.css') }}">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <link rel="stylesheet" href="{{ URL::to('/js/index.js') }}">
    <link rel="shortcut icon" href="{{ URL::to('/images/icon.png') }}" type="image/x-icon">
</head>
<body>
<!-- Begin Header.php -->
<div class="header-bar">
    <div class="navigation">
        <div class="hamburger-menu">
            <input id="menu__toggle" type="checkbox" />
            <label class="menu__btn" for="menu__toggle">
                <span></span>
            </label>
            <ul class="menu__box">
                <li><a href="/sales" class="menu__item">ЗНИЖКИ</a></li>
                <li><a href="/garantia" class="menu__item">ГАРАНТІЯ</a></li>
                <li><a href="/delivery" class="menu__item">ДОСТАВКА</a></li>
                <li><a href="/payment" class="menu__item">ОПЛАТА</a></li>
                <li><a href="/about-us" class="menu__item">ПРО НАС</a></li>
                <li><a href="/contacts" class="menu__item">КОНТАКТИ</a></li>
            </ul>
        </div>
        <div id="buttons">
            <ul>
                <li><a href="/sales">ЗНИЖКИ</a></li>
                <li><a href="/garantia">ГАРАНТІЯ</a></li>
                <li><a href="/delivery">ДОСТАВКА</a></li>
                <li><a href="/payment">ОПЛАТА</a></li>
                <li><a href="/about-us">ПРО НАС</a></li>
                <li><a href="/contacts">КОНТАКТИ</a></li>
            </ul>
        </div>
        <div class="search-form">
            <form method="get" action="/search" id="search">
                <input name="q" type="text" size="40" placeholder="Поиск..." />
            </form>
        </div>
    </div>
    <div class="sub-header-1">
        <div id="logo">
            <a href="/"><img src="{{ asset('images/logo.png') }}"></a>
        </div>
        <div id="adress">
            <h3>Магазин:</h3>
            <p>Київ, вул. Страждань, 66</p>
        </div>
        <div id="phones">
            <p><img src="{{ asset('images/kiev.png') }}">(096) 123 45 67</p>
            <p><img src="{{ asset('images/vodafone.png') }}">(050) 123 45 67</p>
        </div>
        <div id="easynetshop-cart">
            <div id="enscart_my_wrapper">
                <div id="enscart_myimage_wrapper">
                    <a href="/cart-show"><img src="{{ asset('images/cart.png') }}"> </a>
                </div>
                <p hidden="true">{{$ip = $_SERVER['REMOTE_ADDR']}}</p>
                <div id="enscart_my_counter_wrapper"><span  id="easynetshop-cart-count">{{App\Bucket::where('user_ip', 'like', "%$ip%")->distinct('id')->count('id')}}</span></div>
            </div>
        </div>
    </div>


    @include('categories')
    @yield('content')


    <div class="footer-bar">
        <div class="footer-layer1">
            <div class="f-block">
                <img src="{{ asset('images/f_img1.jpg') }}">
                <p>Безкоштовна доставка по Києву</p>
            </div>
            <div class="f-block">
                <img src="{{ asset('images/f_img2.jpg') }}">
                <p>Дисконтна програма для постійних клієнтів</p>
            </div>
            <div class="f-block">
                <img height=60% src="{{ asset('images/f_img3.jpg') }}">
                <p>Підтримка спортивних заходів</p>
            </div>
        </div>
        <div class="footer-layer2">
            <div class="shedule">
                <h3>Графік роботи:</h3><br>
                <p>Пн - Пт: 10:00 - 20:00</p>
                <p>Сб - Нд: 11:00 - 19:00</p>
            </div>
            <div class="info">
                <h3>Інформація:</h3><br>
                <p><a href="/garantia">Гарантії</a></p>
                <p><a href="/delivery">Доставка</a></p>
                <p><a href="/payment">Оплата</a></p>
                <p><a href="/about-us">Про нас</a></p>
            </div>
            <div class="contacts">
                <h3>Слідкуйте за нами<br> у соц мережах:</h3><br>
                <p><a href="https://www.instagram.com/zelenskiy_official/?hl=ru">Instagram</a></p>
                <p><a href="https://www.facebook.com/zelenskiy95">Facebook</a></p>
            </div>
        </div>
    </div>
</div>

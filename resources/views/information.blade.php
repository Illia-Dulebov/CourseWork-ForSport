@extends('layouts.main')
@section('content')
        <div class="top-line">
            <p class="sale">Інформація</p>
            <p class="sale"><img src="{{ asset('images/line.png') }}" width="95%"></p>
        </div>
        <div class="info-page">
        <ul class="hr">
            <li>
                <div class="info-block">
                    <a href="/garantia"><img src="{{ asset('images/garantia.png') }}"></a>
                    <a href="/garantia"><h3>Гарантія</h3></a>
                </div>
            </li>
            <li>
                <div class="info-block">
                    <a href="/delivery"><img src="{{ asset('images/delivery.png') }}"></a>
                        <a href="/delivery"><h3>Доставка</h3></a>
                </div>
            </li>
            <li>
                <div class="info-block">
                    <a href="/payment"><img src="{{ asset('images/payment.png') }}"></a>
                        <a href="/payment"><h3>Оплата</h3></a>
                </div>
            </li>
        </ul>
    </div>
@endsection

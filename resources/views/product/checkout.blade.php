@extends('admin-panel')

@section('content')
    <form action="{{ route('get.way') }}" method="post">
        @csrf
        <select name="from" id="">
            <option value="c146">Симферополь</option>
        </select>
        <select name="to" id="">
            <option value="c213">Москва</option>
        </select>
        <button type="submit">Отправить</button>
    </form>

{{--@php--}}
{{--    $shop_id		= '5297';--}}
{{--    $amount			= number_format(100.5, 2, '.', ''); // -> "100.50"--}}
{{--    $currency		= 'RUB'; // или "USD", "EUR"--}}
{{--    $description	= 'iPhone 8 plus 32 Gb';--}}
{{--    $order_id		= 123456;--}}
{{--    $method_id		= '';--}}
{{--    $client_email	= '';--}}
{{--    $debug			= ''; // или "1"--}}
{{--    $secret_key		= 'c4f9e1109aec934b'; // из настроек сайта в личном кабинете--}}
{{--    $signature		= md5($secret_key.md5(join(':', array($shop_id, $amount, $currency, $description, $order_id, $method_id, $client_email, $debug, $secret_key))));--}}
{{--    $language		= 'ru'; // или 'en'--}}
{{--@endphp--}}

{{--<form method="post" action="https://megakassa.ru/merchant/" accept-charset="UTF-8">--}}
{{--    <input type="text" name="name" value="Ваше имя">--}}
{{--    <input type="text" name="email" value="Ваш почтовый адрес">--}}
{{--    <input type="hidden" name="shop_id" value="{{  $shop_id }}" />--}}
{{--    <input type="hidden" name="amount" value="{{  $amount }}" />--}}
{{--    <input type="hidden" name="currency" value="{{  $currency }}" />--}}
{{--    <input type="hidden" name="description" value="{{  htmlentities($description, ENT_QUOTES, 'UTF-8') }}" />--}}
{{--    <input type="hidden" name="order_id" value="{{  $order_id }}" />--}}
{{--    <input type="hidden" name="method_id" value="{{  $method_id }}" />--}}
{{--    <input type="hidden" name="client_email" value="{{  $client_email }}" />--}}
{{--    <input type="hidden" name="debug" value="{{  $debug }}" />--}}
{{--    <input type="hidden" name="signature" value="{{  $signature }}" />--}}
{{--    <input type="hidden" name="language" value="{{  $language }}" />--}}
{{--    <input type="submit" value="Купить" />--}}
{{--</form>--}}

@endsection
@php 
$setting=App\Http\Controllers\HomeController::getsetting();
@endphp
@extends('layouts.user_order_item')
@section('title', 'Order Products')
@section("description")
{{$setting->description}}
@endsection
@section('keywords', $setting->keywords)
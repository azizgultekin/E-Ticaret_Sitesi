@php 
$setting=App\Http\Controllers\HomeController::getsetting();
@endphp
@extends('layouts.user_order')
@section('title', 'My Orders')
@section("description")
{{$setting->description}}
@endsection
@section('keywords', $setting->keywords)
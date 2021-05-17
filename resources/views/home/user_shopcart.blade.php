@php 
$setting=App\Http\Controllers\HomeController::getsetting();
@endphp
@extends('layouts.user_shopcart')
@section('title', $setting->title)
@section("description")
{{$setting->description}}
@endsection
@section('keywords', $setting->keywords)
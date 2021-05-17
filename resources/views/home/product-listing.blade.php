@extends('layouts.product-listing')
@php 
$setting=App\Http\Controllers\HomeController::getsetting();
@endphp

@section('title', $setting->title." Products List")

@section("description")
{{$setting->description}}
@endsection

@section('keywords', $setting->keywords)




@extends('layouts.search_products')
@php 
$setting=App\Http\Controllers\HomeController::getsetting();
@endphp

@section('title', $search." Products List")

@section("description")
{{$setting->description}}
@endsection

@section('keywords', $setting->keywords)
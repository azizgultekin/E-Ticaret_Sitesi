@php 
$setting=App\Http\Controllers\HomeController::getsetting();
@endphp
@extends('layouts.compare')
@section('title', $setting->title)
@section("description")
{{$setting->description}}
@endsection
@section('keywords', $setting->keywords)
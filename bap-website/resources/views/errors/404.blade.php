@extends('website.layouts.mainLayout')

@section('title')
    <title>404</title>
@endsection()

@section('styles')
    <link href="/css/404.css" rel="stylesheet">
@endsection()

@section('header')
    <h1 class="header__titel">SuperShopper</h1>
@endsection()

@section('nav')
    @include('website.layouts.navigationLayout', ['page'=>'404'])
@endsection()

@section('content')
    <div class="error">404</div>
    <p class="insult">Your stupid</p>
@endsection()

@section('footer')
    @include('website.footer')
@endsection()

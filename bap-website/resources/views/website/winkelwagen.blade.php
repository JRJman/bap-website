@extends('website.layouts.mainLayout')

@section('title')
    <title>Winkelwagen</title>
@endsection()

@section('styles')
    <link href="/css/websiteWinkelwagen.css" rel="stylesheet">
@endsection()

@section('header')
    <h1 class="header__titel">SuperShopper</h1>
@endsection()

@section('nav')
    @include('website.layouts.navigationLayout', ['page'=>'winkelwagen'])
@endsection()

@section('content')
    Coming soon
@endsection()

@section('footer')
    Coming never
@endsection()

@extends('website.layouts.mainLayout')

@section('title')
    <title>Home</title>
@endsection()

@section('styles')
    <link href="/css/websiteArtikel.css" rel="stylesheet">
@endsection()

@section('header')
    <h1 class="header__titel">SuperShopper</h1>
@endsection()

@section('nav')
    @include('website.layouts.navigationLayout', ['page'=>'artikel'])
@endsection()

@section('content')
    <p>dit is artikel {{ $artikelnummer }}</p>
@endsection()

@section('footer')
    Coming never
@endsection()

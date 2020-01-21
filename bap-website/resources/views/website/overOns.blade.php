@extends('website.layouts.mainLayout')

@section('title')
    <title>Home</title>
@endsection()

@section('styles')
    <link href="/css/websiteOverons.css" rel="stylesheet">
@endsection()

@section('header')
    <h1 class="header__titel">SuperShopper</h1>
@endsection()

@section('nav')
    @include('website.layouts.navigationLayout', ['page'=>'over-ons'])
@endsection()

@section('content')
    Coming soon
@endsection()

@section('footer')
    Coming never
@endsection()

@extends('website.layouts.mainLayout')

@section('title')
    <title>Account</title>
@endsection()

@section('styles')
    <link href="/css/websiteAccount.css" rel="stylesheet">
@endsection()

@section('header')
    <h1 class="header__titel">SuperShopper</h1>
@endsection()

@section('nav')
    @include('website.layouts.navigationLayout', ['page'=>'account'])
@endsection()

@section('content')
    Coming soon
@endsection()

@section('footer')
    Coming never
@endsection()

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
        <div class="artikel">
            <h2 class="artikel__titel">{{$product->titel}}</h2>
            <img class="artikel__image" src="{{asset('storage/' . $product->image)}}" alt="{{$product->titel}}">
            <div class="artikel__rechts">
                <p class="artikel__prijs">€{{$product->prijs}},-</p>
                <p class="artikel__aantal">Aantal producten op vooraad:{{$product->aantal}}</p>
            </div>
            <div class="artikel__beschrijving">
                <h2 class="artikel__beschrijving--titel">Beschrijving</h2>
                <p class="artikel__beschrijving--tekst">{{$product->grote_beschrijving}}</p>
            </div>
        </div>
@endsection()

@section('footer')
    @include('website.footer')
@endsection()

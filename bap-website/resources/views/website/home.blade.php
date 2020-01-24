@extends('website.layouts.mainLayout')

@section('title')
    <title>Home</title>
@endsection()

@section('styles')
    <link href="/css/websiteHome.css" rel="stylesheet">
@endsection()

@section('header')
    <h1 class="header__titel">SuperShopper</h1>
@endsection()

@section('nav')
    @include('website.layouts.navigationLayout', ['page'=>'homepage'])
@endsection()

@section('content')
    <?php $number = 1; ?>
    <div class="producten">
        @foreach($producten as $product)

            @if($number==4)
            <div class="productInside">
            @endif

            <div class="product" onclick="goToPage({{$product->id}})">
                <h3 class="product__title">{{$product->titel}}</h3>
                <img class="product__image" src="{{asset('storage/' . $product->image)}}" alt="{{$product->titel}}">
                <p class="product__beschrijving">{{$product->kleine_beschrijving}}</p>
            </div>

            @if($number==5)
            </div>
            @endif

            <?php $number++ ?>
        @endforeach
    </div>
    <div class="center">
        {{$producten->links()}}
    </div>
    <script>
        function goToPage(id){
            window.location.href = '/artikel/' + id;
        }
    </script>
@endsection()

@section('footer')
    @include('website.footer')
@endsection()

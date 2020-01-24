@extends('website.layouts.mainLayout')

@section('title')
    <title>Admin</title>
@endsection()

@section('styles')
    <link href="/css/websiteAdmin.css" rel="stylesheet">
@endsection()

@section('header')
    <h1 class="header__titel">SuperShopper</h1>
@endsection()

@section('nav')
    @include('website.layouts.navigationLayout', ['page'=>'admin.edit'])
@endsection()

@section('content')
            <form class="form" method="post" action="{{ route('admin.update',$product->id) }}" method="POST">
                @csrf
                @if($errors->any())
                    <div class="form__errors">
                        <ul class="form__errors--list">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div>
                    <label class="form__label">Titel</label><br>
                    <input class="form__input" type="text" name="titel" value="{{$product->titel}}">
                </div>
                <div>
                    <label class="form__label">Kleine beschrijving</label><br>
                    <textarea class="form__textarea" cols="30" rows="6" name="beschrijving_klein">{{$product->kleine_beschrijving}}</textarea>
                </div>
                <div>
                    <label class="form__label">Grote beschrijving</label><br>
                    <textarea class="form__textarea" cols="30" rows="6" name="beschrijving_groot">{{$product->grote_beschrijving}}</textarea>
                </div>
                <div>
                    <label class="form__label">Prijs</label><br>
                    <input class="form__input" type="number" name="prijs" value="{{$product->prijs}}">
                </div>
                <div>
                    <label class="form__label">Aantal</label><br>
                    <input class="form__input" type="number" name="aantal" value="{{$product->aantal}}">
                </div>
                <input class="form__submit" type="submit" value="veranderen">
            </form>
@endsection()

@section('footer')
    @include('website.footer')
@endsection()

@extends('website.layouts.mainLayout')

@section('title')
    <title>Login</title>
@endsection()

@section('styles')
    <link href="/css/websiteLogin.css" rel="stylesheet">
@endsection()

@section('header')
    <h1 class="header__titel">SuperShopper</h1>
@endsection()

@section('nav')
    @include('website.layouts.navigationLayout', ['page'=>'login'])
@endsection()

@section('content')

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <h1 class="titel">Login</h1>
    <form class="form" action="{{ route('login.store') }}" method="POST">
        @csrf
        <div class="form__gebruikersnaam">
            <label for="gebruikersnaam" class="form__label">Gebruikersnaam</label><br>
            <input type="text" name="gebruikersnaam" class="form__input" value="{{old('gebruikersnaam')}}">
        </div>
        <div class="form__wachtwoord">
            <label for="wachtwoord" class="form__label">Wachtwoord</label><br>
            <input type="password" name="wachtwoord" class="form__input" value="{{old('wachtwoord')}}">
        </div>
        <input type="submit" value="login" class="form__submit">
    </form>

@endsection()

@section('footer')
    Coming never
@endsection()

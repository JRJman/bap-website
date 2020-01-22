@extends('website.layouts.mainLayout')

@section('title')
    <title>Registeer</title>
@endsection()

@section('styles')
    <link href="/css/websiteregisteer.css" rel="stylesheet">
@endsection()

@section('header')
    <h1 class="header__titel">SuperShopper</h1>
@endsection()

@section('nav')
    @include('website.layouts.navigationLayout', ['page'=>'registeer.create'])
@endsection()

@section('content')

    <h1 class="titel">Registeren</h1>
    <form class="form" action="{{ route('registeer.store') }}" method="POST">
        @csrf

        @if($errors->any())
            <div class="form__errors">
                <ul class="form__errors--list">
                    @foreach($errors->all() as $error)
                        <li class="form__errors--list-item">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="form__gebruikersnaam">
            <label for="gebruikersnaam" class="form__label">Gebruikersnaam</label><br>
            <input type="text" name="gebruikersnaam" class="form__input" value="{{old('gebruikersnaam')}}">
        </div>
        <div class="form__wachtwoord">
            <label for="wachtwoord" class="form__label">Wachtwoord</label><br>
            <input type="password" name="wachtwoord" class="form__input" value="{{old('wachtwoord')}}">
        </div>
        <div class="form__email">
            <label for="email" class="form__label">Email</label><br>
            <input type="email" name="email" class="form__input" value="{{old('email')}}">
        </div>
        <input type="submit" value="registeer" class="form__submit">
    </form>

@endsection()

@section('footer')
    Coming never
@endsection()

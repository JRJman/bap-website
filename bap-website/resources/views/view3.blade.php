@extends('layouts.homeLayout');

@section('header')
    <h1>Welcome view 3 made by Joep Janssen</h1>
@endsection()

@section('nav')
    <ul class="list">
        <li class="list__item"><a href="/views/view1" class="list__item--link">view1</a></li>
        <li class="list__item"><a href="/views/view2" class="list__item--link">view2</a></li>
        <li class="list__item"><a href="/views/view3" class="list__item--link list__item--active">view3</a></li>
    </ul>
@endsection()

@section('content')
    Coming soon
@endsection()

@section('footer')
    Coming never
@endsection()
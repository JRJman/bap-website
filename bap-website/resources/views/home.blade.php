@extends('layouts.homeLayout');

@section('header')
    <h1>Welcome to the page of Joep Janssen</h1>
@endsection()

@section('nav')
    @include('layouts.navigationLayout', ['page' => 'homepage'])
@endsection()

@section('content')
    Coming soon
@endsection()

@section('footer')
    Coming never
@endsection()


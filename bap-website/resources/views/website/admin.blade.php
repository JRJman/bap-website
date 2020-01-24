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
    @include('website.layouts.navigationLayout', ['page'=>'admin'])
@endsection()

@section('content')
    <div class="wrap">
        <section class="form__toevoegen">
            <h2 class="form__title">Product toevoegen</h2>
            <form class="form" action="{{ route('admin.store') }}" method="POST" enctype="multipart/form-data">
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
                    <input class="form__input" type="text" name="titel" value="{{old('titel')}}">
                </div>
                <div>
                    <label class="form__label">Kleine beschrijving</label><br>
                    <textarea class="form__textarea" cols="30" rows="6" name="kleine_beschrijving">{{old('kleine_beschrijving')}}</textarea>
                </div>
                <div>
                    <label class="form__label">Grote beschrijving</label><br>
                    <textarea class="form__textarea" cols="30" rows="6" name="grote_beschrijving">{{old('grote_beschrijving')}}</textarea>
                </div>
                <div>
                    <label class="form__label">Image</label><br>
                    <input class="form__input" type="file" name="image">
                </div>
                <div>
                    <label class="form__label">Prijs</label><br>
                    <input class="form__input" type="number" name="prijs" value="{{old('prijs')}}">
                </div>
                <div>
                    <label class="form__label">Aantal</label><br>
                    <input class="form__input" type="number" name="aantal" value="{{old('aantal')}}">
                </div>
                <input class="form__submit" type="submit" value="toevoegen">
            </form>
        </section>
        <section>
            <h2>Producten</h2>
            <table>
                <tr>
                    <th>Id</th>
                    <th>Titel</th>
                    <th>Kleine beschrijving</th>
                    <th>Grote beschrijving</th>
                    <th>Prijs</th>
                    <th>Aantal</th>
                    <th>Updaten</th>
                    <th>Verwijderen</th>
                </tr>
                @foreach($producten as $product)
                    <tr>
                        <td><div>{{$product->id}}</div></td>
                        <td><div>{{$product->titel}}</div></td>
                        <td><div>{{$product->kleine_beschrijving}}</div></td>
                        <td><div>{{$product->grote_beschrijving}}</div></td>
                        <td><div>{{$product->prijs}}</div></td>
                        <td><div>{{$product->aantal}}</div></td>
                        <td><a class="update" href="{{route('admin.edit',$product->id)}}">X</a></td>
                        <td><a class="verwijderen" href="{{route('admin.destroy',$product->id)}}">X</a></td>
                    </tr>
                @endforeach
            </table>
        </section>
    </div>
    <div class="center">
        {{$producten->links()}}
    </div>
@endsection()

@section('footer')
    @include('website.footer')
@endsection()

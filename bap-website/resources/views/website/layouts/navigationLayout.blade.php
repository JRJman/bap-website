<?php

$pageNames = [
        'Home' => 'homepage',
        'Over Ons' => 'over-ons',
        'Login' => 'login',
        'Registeer' => 'registeer',
        'Winkelwagen' => 'winkelwagen',
    ];

?>
    <ul class="nav__list">
    @foreach ($pageNames as $pageName => $route)
            @if($route == $page)
                <li class="nav__list--item nav__list--item--active"><a href="{{route($route)}}" class="list__item--link">{{$pageName}}</a></li>
            @else
                <li class="nav__list--item"><a href="{{route($route)}}" class="list__item--link">{{$pageName}}</a></li>
            @endif()
    @endforeach
    </ul>

<?php

$pageNames = [
        'Home' => 'homepage',
        'Over Ons' => 'over-ons',
        'Admin' => 'admin'
    ];
$number = 0;

?>
    <ul class="nav__list">
    @foreach ($pageNames as $pageName => $route)
            @if($route == $page)
                <li class="nav__list--item nav__list--item--active"><a href="{{route($route)}}" class="list__item--link">{{$pageName}}</a></li>
            @else
                <li class="nav__list--item"><a href="{{route($route)}}" class="list__item--link">{{$pageName}}</a></li>
            @endif()
            <?php $number++ ?>
        @endforeach
    </ul>
    <style>
        .nav__list {
            grid-template-columns: repeat(<?php echo $number ?>, 1fr);
        }
    </style>

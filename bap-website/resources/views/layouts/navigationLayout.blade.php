<?php

$pageNames = [
        'home' => 'homepage',
        'contact' => 'contact',
        'dit is een lange url' => 'lange-url',
        'kort url' => 'korte-url',
        'blog' => 'blog',
        'mijn account instellingen' => 'mijn-account-instellingen',
        'mijn account bestellingen' => 'mijn-account-bestellingen',
        'view 1' => 'view1',
        'view 2' => 'view2',
        'view 3' => 'view3'
    ];

    $extravars = [
        'blog' => ['artikel' => 'een artikel']
    ];

?>
    <ul>
    @foreach ($pageNames as $pageName => $route)
            <?php
                $checker = true;
                $checker2 = true;
            ?>
            @if($route == $page)
                <li class="list__item--active"><a href="{{route($route)}}" class="list__item--link">{{$pageName}}</a></li>
                <?php $checker2 = false;?>
            @endif()

                @foreach($extravars as $varName => $var)
                    @if($route == $varName)
                        <li class="list__item"><a href="{{route($route , $var)}}" class="list__item--link">{{$pageName}}</a></li>
                        <?php $checker = false?>
                    @endif
                @endforeach

                @if($checker && $checker2)
                    <li class="list__item"><a href="{{route($route)}}" class="list__item--link">{{$pageName}}</a></li>
                @endif

    @endforeach
    </ul>

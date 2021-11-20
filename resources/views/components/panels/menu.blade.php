<?php

$menu = [
    [
        'title' => 'Главная',
        'route' => 'homepage',
        'sort' => 1,
    ],
    [
        'title' => 'Путешествия',
        'route' => 'travel',
        'sort' => 2,
    ],
    [
        'title' => 'Образ жизни',
        'route' => 'lifestyle',
        'sort' => 3,
    ],
    [
        'title' => 'О нас',
        'route' => 'about',
        'sort' => 5,
    ],
    [
        'title' => 'Контакты',
        'route' => 'contact',
        'sort' => 4,
    ],
];

$menu = arraySort($menu, 'sort', SORT_ASC);
?>

<nav id="colorlib-main-menu" role="navigation">
    <ul>
        @foreach($menu as $value)
            <li class="@if (request()->routeIs($value['route'])) colorlib-active @endif"><a
                    href="{{ route($value['route']) }}">{{ $value['title'] }}</a></li>
        @endforeach
    </ul>
</nav>

<!DOCTYPE html>
<html lang="ru">
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <x-panels.fonts/>
    <x-panels.css/>
</head>
<body>

<div id="colorlib-page">
    <x-panels.aside/>
    <div id="colorlib-main">
        @yield('content')
    </div><!-- END COLORLIB-MAIN -->
</div><!-- END COLORLIB-PAGE -->

<!-- loader -->
<x-panels.loader/>

<!-- js -->
<x-panels.js/>

</body>
</html>

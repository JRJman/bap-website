<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    @section('title')
        <title>Home</title>
    @show()

    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="/css/websiteHeader.css" rel="stylesheet">
    <link href="/css/websiteNav.css" rel="stylesheet">
    <link href="/css/websiteFooter.css" rel="stylesheet">
@section('styles')
        <link href="/css/websiteHome.css" rel="stylesheet">
    @show()
</head>
<body>

<header class="header">
    @section('header')
        De Header
    @show()
</header>

<nav class="nav">
    @section('nav')
        De navigation
    @show()
</nav>

<main class="main">
    @section('content')
        De Content
    @show()
</main>

<footer class="footer">
    @section('footer')
        De Footer
    @show()
</footer>

</body>
</html>

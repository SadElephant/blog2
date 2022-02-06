<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
          integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/app.css">

    <title>Блог @yield('title-block')</title>
</head>
<body class="antialiased">
@include('inc.header')
@if(Request::is('/'))
    @include('inc.hero')
@endif


<div class="container mt-5">
    <div class="row">
        <div class="col-8">@yield('content')</div>
        <div class="col-4">@include('inc.aside')</div>
    </div>
</div>
@include('inc.footer')
</body>
</html>

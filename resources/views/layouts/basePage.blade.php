<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title-block')</title>
        <style type="text/css">
            h1{
                padding-left: 5px;
                background-color: cadetblue;
                color: white;
            }
        </style>
    </head>
    <body>
        <h1>SHKOLO</h1>
        @yield('content')
    </body>
</html>

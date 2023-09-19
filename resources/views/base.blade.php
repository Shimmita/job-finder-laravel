<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Job Finder</title>
        <!-- external css-->
        <link rel="stylesheet" href="k/css/main.css">
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figwelcometree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>

        </style>
    </head>

    <body>
        <header >Job Finder</header>
        @yield('content')
        <footer>Copyright Shimmita Douglas 2023</footer>
    </body>

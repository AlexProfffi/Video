<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Cardo:wght@700&family=Lato:wght@300;400;900&display=swap" rel="stylesheet">

        @routes
        @vite(['resources/js/app.js', 'resources/scss/app.scss'])
        @inertiaHead
    </head>

    <body class="antialiased">
        @inertia
    </body>
</html>

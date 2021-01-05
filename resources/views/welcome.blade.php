<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">


</head>

<body class="antialiased">
    <x-header />
   <x-background />
    <!-- GIRL CARD EVENTS POSSIBLE-->
    <x-craft-card />

    <!--BEGIN FOOTER-->
    <x-footer />

    <!--END FOOTER-->
</body>

</html>
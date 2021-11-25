<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Beer and Code - Livewire</title>

        @livewireStyles
    </head>
    <body class="antialiased">
        <div class="container">Olá mundo - Live</div>

        @livewireScripts
    </body>
</html>
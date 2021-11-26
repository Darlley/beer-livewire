<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Beer and Code - Livewire</title>

        @livewireStyles
    </head>
    <body class="antialiased">
        <div>
            <p>Menu de Navegação</p>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/app">Aplicação</a></li>
            </ul>
        </div>

        {{ $slot }}

        @livewireScripts
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>

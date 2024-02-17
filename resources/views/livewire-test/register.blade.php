<html>
    <head>
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
    <body>
        <p class="text-blue-600">test register</p>
        @livewire('register')
        @livewireScripts
    </body>
</html>

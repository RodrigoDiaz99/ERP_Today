<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ env('APP_NAME') }} | {{ $title }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet"/>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css"/>

    <style>
        [x-cloak] { display: none !important; }
    </style>

    @livewireStyles
    {{--<script>
        import Turbolinks from 'turbolinks';

        Turbolinks.start()
    </script>--}}

</head>

<body class="bg-gray-200 dark:bg-gray-900">
    <main>
        {{ $slot }}
    </main>

    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
    <script src="{{ asset('js/charts-lines.js') }}" defer></script>
    <script src="{{ asset('js/charts-pie.js') }}" defer></script>
    <script src="{{ asset('js/charts-bars.js') }}" defer></script>

    @livewireScripts

    @stack('modals')
    @stack('js')
</body>
</html>

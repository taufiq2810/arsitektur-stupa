<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
 

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  

    @yield('additional-css')

</head>

<body>
    {{-- including navbar --}}
    @include('app.navbar')

    {{-- start content --}}
    <div id="app">
        @yield('content')
    </div>
    @include('app.footer')
    {{-- set default js --}}
    <script src="{{ asset('js/app.js') }}" defer></script>
    {{-- place for extra js --}}
    @yield('additional-js')
</body>

</html>

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>{{ (request()->path() != "/") ? strtoupper(request()->path()) : "INDEX" }}</title>
</head>
<body>
    <v-app id="app">
        <example-component></example-component>
    </v-app>
    <script src="{{ (getenv("APP_ENV")=="local") ? asset('js/app.js') : s3_asset('app.js.gz') }}"></script>
    <script src="{{ (getenv("APP_ENV")=="local") ? asset('js/vendor.js') : s3_asset("vendor.js.gz")}}"></script>
    <script src="{{ (getenv("APP_ENV")=="local") ? asset('js/manifest.js') : s3_asset('manifest.js.gz') }}"></script>
</body>
</html>

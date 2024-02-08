<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/carousel/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <!-- Option 1: Include in HTML -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body class="">
    <div id="app">
        <x-layouts.header />

        <main class="mb-5">
            @yield('content')
        </main>
        
        <!-- FOOTER -->
        </br></br>
        <x-layouts.footer />
    </div>

    @if(request()->route() && request()->route()->getName() == 'live-donor-demo')
        @vite(['resources/js/livedonorreg.js'])
    @elseif(request()->route() && request()->route()->getName() == 'live-recp-demo')
        @vite(['resources/js/liverecpreg.js'])
    @elseif(request()->route() && request()->route()->getName() == 'live-routine')
        @vite(['resources/js/liveroutine.js'])
    @endif

    <script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>

    {!! JsValidator::formRequest('App\Http\Requests\LiveDonorReg') !!}
</body>


</html>
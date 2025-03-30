<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Radio Engineering Circle Inc.')</title>
    @vite('resources/css/app.css')
    
</head>

<body class="bg-white">
    @if(request()->is('/') || request()->is('Rec-Home'))
    <div id="loadingScreen" class="loading-screen">
        <div class="loading-spinner"></div>
        <div class="loading-text text-2xl">LOADING ...</div>
    </div>
    @endif

    @include('partials.header')
    @include('partials.navbar')
    @include('partials.chatbot')
    @include('partials.scroll')
    
    <main>
        @yield('content')
    </main>
    
    @include('partials.footer')


    @if(request()->is('/') || request()->is('Rec-Home'))
    @endif
    
    @vite('resources/js/app.js')
</body>
</html>

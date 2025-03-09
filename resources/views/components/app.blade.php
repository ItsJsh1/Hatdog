<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Radio Engineering Circle Inc.')</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">

    @include('components.navbar') 
    <main>
        @yield('content')
    </main>
    @include('components.chatbot')
    @include('components.scroll')
    @include('components.footer')    



</body>
</html>

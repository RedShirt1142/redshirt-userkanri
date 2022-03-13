<!DOCTYPE html>
<html lang="{{ str_replace('_','-',app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name','Laravel') }}</title>

    <script src="{{ asset('js/app.js') }}"defer></script>

    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-white">
    <div id="app">
        <main class="py-4">
            <nav class="navbar navbar-expand-md navbar-light bg-white">
                <div class="container">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- leftside navbar -->    
                        <ul class="navbar-nav me-auto">
                            <li class="nab-item">
                                <h4><a href="{{ route('users') }}" class="nav-link text-dark font">会員一覧</a></h4>
                            </li>
                        </ul>
                        <!-- rightside navbar -->
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a class="nav-link text-dark text-decoration-underline" href="{{ route('register') }}">{{__('>> 登録') }}</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            @yield('content')
        </main>
    </div>
    
</body>
</html>
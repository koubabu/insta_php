<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand d-flex" href="{{ url('/') }}">
                    <div><img src="data:image/png;base64,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" style="height: 20px; border-right: 1px solid #333" class="pr-3"></div>
                    <div class="pl-3 pt-1">MyInstagram</div>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->username }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>

</html>
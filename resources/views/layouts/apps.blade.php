<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{$title ?? 'Home'}} - {{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/core.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- Favicons -->
    <link rel="icon" href="{{ asset('img/favicon.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('img/apple-touch-icon.png') }}">
</head>

<body>
    <!-- Preloader -->
    {{-- <div class="preloader">
      <div class="spinner-dots">
        <span class="dot1"></span>
        <span class="dot2"></span>
        <span class="dot3"></span>
      </div>
    </div> --}}

    @auth
    @include('partials.sidebar')
    @include('partials.topbar')
    @endauth

    <!-- Main container -->
    <main class="main-container">

        <div class="main-content">
            @auth
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="p-l-9">{{$title ?? 'Home'}}</h3>
                </div>
            </div>
            @endauth

            @yield('content')
            @yield('extra')
        </div>
        <!--/.main-content -->

        <!-- Footer -->
        <footer class="site-footer">
            <div class="row">
                <div class="col-md-6">
                    <p class="text-center text-md-left">
                        © {{date('Y')}}
                        <a href="#">{{ config('app.name', 'Laravel') }}</a>
                        . All rights reserved.</p>
                </div>

                <div class="col-md-6">
                    <ul
                        class="nav nav-primary nav-dotted nav-dot-separated justify-content-center justify-content-md-end">
                        <li class="nav-item">
                            <a class="nav-link" href="https://osen.co.ke" target="_blank">An Osen Concept</a>
                        </li>
                    </ul>
                </div>
            </div>
        </footer>
        <!-- END Footer -->

    </main>
    <!-- END Main container -->



    <!-- Global quickview -->
    <div id="qv-global" class="quickview" data-url="{{ url('data/quickview-global.html') }}">
        <div class="spinner-linear">
            <div class="line"></div>
        </div>
    </div>
    <!-- END Global quickview -->

    @include('sweetalert::alert')

    <!-- Scripts -->
    <script src="{{ asset('js/core.min.js') }}"></script>
    <script src="{{ asset('js/app.min.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>

    @yield('scripts')
</body>

</html>

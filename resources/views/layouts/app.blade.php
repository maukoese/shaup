<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{$title ?? 'Home'}} - {{ config('app.name', 'Laravel') }}</title>

    <link rel="icon" type="image/png" href="images/fav.png">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/line-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/perfect-scrollbar.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery.datepicker.min.css') }}">
    <!-- calander -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/color.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
</head>

<body>
    <!-- Start Page Loading -->
    <div id="loader-wrapper">
        <div id="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
    <div class="panel-layout">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="main-page">

                        @include('partials.sidebar')

                        @include('partials.topbar')

                        <div class="main-content">
                            <div class="responsive-header">
                                <div class="logo-area">
                                    <ul class="notify-area">
                                        <li>
                                            <div class="nav-icon3"> <span></span> <span></span> <span></span>
                                                <span></span> </div>
                                        </li>
                                        <li class="notifications"><a href="#" title=""><i
                                                    class="fa fa-bell-o"></i></a><span class="red-bg">02</span>
                                            <div class="drop notify"> <span class="drop-head">Notifications</span>
                                                <ul class="drop-meta">
                                                    <li> <i class="notifi-icon blue">N</i>
                                                        <div class="notifi-meta">
                                                            <h4><a href="#" title="">Nulla Vel Metus Scelerisque Ante
                                                                    Commodo. </a></h4>
                                                            <span>02:34PM</span>
                                                        </div>
                                                    </li>
                                                    <li> <i class="notifi-icon red">C</i>
                                                        <div class="notifi-meta">
                                                            <h4><a href="#" title="">Nulla Vel Metus Scelerisque Ante
                                                                    Commodo. </a></h4>
                                                            <span>02:34PM</span>
                                                        </div>
                                                    </li>
                                                    <li> <i class="notifi-icon yellow">A</i>
                                                        <div class="notifi-meta">
                                                            <h4><a href="#" title="">Nulla Vel Metus Scelerisque Ante
                                                                    Commodo. </a></h4>
                                                            <span>02:34PM</span>
                                                        </div>
                                                    </li>
                                                    <li> <i class="notifi-icon blue">N</i>
                                                        <div class="notifi-meta">
                                                            <h4><a href="#" title="">Nulla Vel Metus Scelerisque Ante
                                                                    Commodo. </a></h4>
                                                            <span>02:34PM</span>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <span class="drop-bottom"><a href="#" title="">View More
                                                        Notifications</a></span>
                                            </div>
                                        </li>
                                        <li class="messages"><a href="#" title=""><i
                                                    class="fa fa-envelope-o"></i></a><span class="blue-bg">10</span>
                                            <div class="drop messages"> <span class="drop-head">3 New Message <i
                                                        class="fa fa-pencil-square-o"></i></span>
                                                <ul class="drop-meta">
                                                    <li> <i class="notifi-icon"><img
                                                                src="images/resources/user-mesg.jpg" alt=""></i>
                                                        <div class="notifi-meta"> <span>02:34PM</span>
                                                            <h4><a href="#" title="">Hi Teddy, Just wanted to let
                                                                    you...</a></h4>
                                                        </div>
                                                    </li>
                                                    <li> <i class="notifi-icon"><img
                                                                src="images/resources/user-mesg2.jpg" alt=""></i>
                                                        <div class="notifi-meta"> <span>02:34PM</span>
                                                            <h4><a href="#" title="">Hi Teddy, Just wanted to let
                                                                    you...</a></h4>
                                                        </div>
                                                    </li>
                                                    <li> <i class="notifi-icon"><img
                                                                src="images/resources/user-mesg3.jpg" alt=""></i>
                                                        <div class="notifi-meta"> <span>02:34PM</span>
                                                            <h4><a href="#" title="">Hi Teddy, Just wanted to let
                                                                    you...</a></h4>
                                                        </div>
                                                    </li>
                                                    <li> <i class="notifi-icon"><img
                                                                src="images/resources/user-mesg.jpg" alt=""></i>
                                                        <div class="notifi-meta"> <span>02:34PM</span>
                                                            <h4><a href="#" title="">Hi Teddy, Just wanted to let
                                                                    you...</a></h4>
                                                        </div>
                                                    </li>
                                                    <li> <i class="notifi-icon"><img
                                                                src="images/resources/user-mesg2.jpg" alt=""></i>
                                                        <div class="notifi-meta"> <span>02:34PM</span>
                                                            <h4><a href="#" title="">Hi Teddy, Just wanted to let
                                                                    you...</a></h4>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <span class="drop-bottom"><a href="#" title="">View More
                                                        messages</a></span>
                                            </div>
                                        </li>
                                    </ul>

                                    <div class="user-head">
                                        <div class="admin">
                                            <div class="admin-avatar">
                                                <img src="{{auth()->user()->avatar}}" alt="{{auth()->user()->name}}"
                                                    width="40px">
                                                <i class="online"></i>
                                            </div>
                                        </div>
                                        <div class="drop setting">
                                            <span class="drop-head">{{auth()->user()->name}}</span>
                                            <ul class="drop-meta">
                                                <li> <a href="#" title=""><i class="fa fa-eyedropper"></i>Edit
                                                        Profile</a> </li>
                                                <li> <a href="#" title=""><i class="fa fa-envelope-o"></i>My Inbox</a>
                                                </li>

                                                <li> <a href="#" title=""><i class="fa fa-calendar"></i>Calender</a>
                                                </li>
                                                <li> <a href="#" title=""><i class="fa fa-align-right"></i>Balance
                                                        Report</a> </li>
                                            </ul>
                                            <span class="drop-bottom"><a href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                                                        document.getElementById('logout-form').submit();" title="Logout"><i
                                                        class="fa fa-sign-out"></i>log Out</a></span>
                                        </div>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                    <ul class="seting-area">
                                        <li class="langages">
                                            <a title="" href="#">Eng</a>
                                            <ul class="drop language">
                                                <li class="lang-selected"><a href="#"><i class="fa fa-check"></i>
                                                        Eng</a></li>
                                                <li><a href="#">Rus</a></li>
                                                <li><a href="#">Jap</a></li>
                                                <li><a href="#">Arb</a></li>
                                            </ul>
                                        </li>
                                        <li class="setting-panel"><a title="" href="#"><i
                                                    class="icon-equalizer"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="t-search">
                                    <form method="post">
                                        <input type="text" placeholder="Enter Your Keyword">
                                        <button type="submit"><i class="fa fa-search"></i></button>
                                    </form>
                                </div>
                            </div>
                            <!-- responsive header -->
                            <div class="panel-body">

                                <div class="content-area">
                                    @if (! app('request')->is('/') && ! isset($exception))
                                    <div class="sub-bar">
                                        <div class="sub-title">
                                            <h4>{{$title ?? 'Home'}}</h4>
                                        </div>
                                        <ul class="bread-crumb">
                                            <li><a href="{{url('/')}}" title="">app</a></li>
                                            <li>{{$title ?? 'Home'}}</li>
                                        </ul>
                                    </div>
                                    @endif
                                    @yield('content')


                                    <div class="bottombar">
                                        <span>
                                            © {{date('Y')}}
                                            <a href="#">{{ config('app.name', 'Laravel') }}</a>
                                            . All rights reserved.
                                        </span>
                                    </div>
                                </div>
                                <!-- bottombar -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/perfect-scrollbar.jquery.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/chart.min.js') }}"></script>
    <script src="{{ asset('js/echart.min.js') }}"></script>
    <script src="{{ asset('js/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('js/calander.min.js') }}"></script>
    <script src="{{ asset('js/sparkline.js') }}"></script>
    <!-- calander -->
    <script src="{{ asset('js/calander-int.js') }}"></script>
    <!-- calander -->
    <script src="{{ asset('js/custom.js') }}"></script>
    <!-- scripts -->
    <script src="{{ asset('js/custom2.js') }}"></script>
    <script src="{{ asset('js/jvectormap.js') }}"></script><!-- jvactor map -->

    @include('sweetalert::alert')

    @yield('scripts')

</body>

</html>

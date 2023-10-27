<!DOCTYPE html>
<html lang="az">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="college, campus, university, courses, school, educational">
    <meta name="description" content="SparkX">
    <meta name="author" content="SparkX">
    <title>SparkX</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="{{asset('img/logos/pattern.png')}}" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="{{asset('img/logos/pattern.png')}}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="{{asset('img/apple-touch-icon-72x72-precomposed.png')}}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="{{asset('img/apple-touch-icon-114x114-precomposed.png')}}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="{{asset('img/apple-touch-icon-144x144-precomposed.png')}}">

    <!-- BASE CSS -->
    <link href="{{asset('css/main_font/main_font.css')}}" rel="stylesheet">
    <link href="{{asset('css/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/menu.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/responsive.css')}}" rel="stylesheet">
    <link href="{{asset('css/elegant_font/elegant_font.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/icon_font/pe-icon-7-stroke.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/fontello/css/fontello.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/edu_fonts/edu_fonts.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/magnific-popup.css')}}" rel="stylesheet">


    <!-- YOUR CUSTOM CSS -->
    <link href="{{asset('css/custom.css')}}" rel="stylesheet">

    <!-- SPECIFIC CSS -->
    <link href="{{asset('layerslider/css/layerslider.css')}}" rel="stylesheet">
    <link href="{{asset('css/tabs.css')}}" rel="stylesheet">
    <link href="css/date_time_picker.css" rel="stylesheet">
    <link href="css/blog.css" rel="stylesheet">
</head>

<body>

<div id="preloader">
    <div class="pulse"></div>
</div><!-- Pulse Preloader -->

<!-- Header================================================== -->
<header>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 col-sm-3 col-xs-3">
                <div id="logo">
                    <a href="{{route('dashboard')}}"><img src="{{asset('img/logos/Asset 3.png')}}" width="140" height="30" alt="SparkX" data-retina="true"></a>
                </div>
            </div>
            <nav class="col-md-9 col-sm-9 col-xs-9">
                <a class="cmn-toggle-switch cmn-toggle-switch__htx open_close" href="javascript:void(0);"><span>Menu mobile</span></a>
                <div class="main-menu">
{{--                    <div id="header_menu">--}}
{{--                        <img src="{{asset('img/logo_mobile.png')}}" width="125" height="40" alt="Atena" data-retina="true">--}}
{{--                    </div>--}}
                    <a href="{{route('dashboard')}}" class="open_close" id="close_in"><i class="icon_close"></i></a>
                    <ul>
                        <li class="submenu">
                            <a href="{{route('dashboard')}}" class="show-submenu">Ana Səhifə</a>
                        </li>
                        <li class="submenu">
                            <a href="{{route('about-page')}}" class="show-submenu">Haqqımızda</a>
                        </li>
                        <li class="submenu">
                            <a href="{{route('course')}}" class="show-submenu">Kurslar</a>
                        </li>
                        <li class="submenu">
                            <a href="{{route('staff')}}" class="show-submenu">Heyət</a>
                        </li>
{{--                        <li class="submenu">--}}
{{--                            <a href="{{route('online-apply')}}" class="show-submenu">Haqqımızda</a>--}}
{{--                        </li>--}}
{{--                        <li class="item-has-children">--}}
{{--                            <a>AKADEMİYA</a>--}}
{{--                            <ul class="sub-menu">--}}
{{--                                <li><a href="{{route('course')}}"></a></li>--}}
{{--                                <li><a href="{{route('staff')}}"></a></li>--}}
{{--                                <li><a href="{{route('online-apply')}}">Onlayn Müraciət</a></li>--}}
{{--                            </ul>--}}
{{--                        </li>--}}
                        <li class="submenu">
                            <a href="{{route('blog')}}" class="show-submenu">Bloq</a>
                        </li>
                        <li class="submenu">
                            <a href="{{route('contact')}}" class="show-submenu">Əlaqə</a>
                        </li>
{{--                        <li class="submenu">--}}
{{--                            <a href="{{route('apply')}}" class="show-submenu">MÜRACİƏT ET</a>--}}
{{--                        </li>--}}
                    </ul>
                </div><!-- End main-menu -->
            </nav>
        </div>
    </div><!-- container -->
</header><!-- End Header -->

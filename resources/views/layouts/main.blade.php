<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!--><html lang="en"><!--<![endif]-->

<head>
    <meta charset="utf-8">

    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link rel='stylesheet' id='divi-fonts-css'  href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&#038;subset=latin,latin-ext' type='text/css' media='all' />
    <title>TekClassifieds - @yield('title')</title>

    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="/css/style.css" rel="stylesheet">
    <link href="/css/small_device.css?v=1" rel="stylesheet" />


    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script>window.jQuery || document.write(unescape('%3Cscript src="js/jquery-1.12.3.min.js"%3E%3C/script%3E'))</script>
    <script src="/js/script.js"></script>

    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>
<body>
<div class="container">
    <!-- HEADER -->
    <div class="main-header">
        <ul class="nav navbar-nav navbar-right navregister">
            @if(Auth::guest())
                <li><a href="/auth/login">Login</a></li>
                <li><a href="/auth/register">Register</a></li>

            @else
                <li><a href="/auth/logout">Logout</a></li>
                <li class="navregister_user">{{ Auth::user()->name }}</li>
            @endif

        </ul>
        <p class="head-contact">
            <span>+ 555 5555 55555</span>&nbsp&nbsp&nbsp | &nbsp&nbsp&nbsp<a href="mailto:info@info@devices.com" target="_top">info@devices.com</a>


        </p>

        <a href="/" class="logo"><img width="150" src="/images/device_lab_logo.png" alt="Lijf concept" /></a>

    </div><!--/ header-->
</div>

<!-- NAVIGATION -->
<div class="bg_nav">
    <div class="container">
        <div class="main-nav">
            <a href="/" class="three-lines-menu">&#9776;</a><span class="menu-min">Menu</span>
            <div id="navbar" class="collapse navbar-collapse">

                <ul class="inline">
                    <li><a href="/home">Home</a></li>
                    <li><a href="/">All list products</a></li>
                    <li><a href="/classifieds/create">Add Listing</a></li>
                    <li><a href="/partners">Partners</a></li>
                    <li><a href="/agenda">Agenda</a></li>
                    <li><a href="/contact">Contact</a></li>
                </ul>

            </div><!--/.nav-collapse -->

        </div>
    </div>
</div><!--/ navigation-->

<div class="container">
    <!-- MAIN -->
    <div class="main">

        {{--@if (in_array(Request::segment(1), array('home','index')))--}}
{{--            @yield('header')--}}
        {{--@include('img')--}}
        @yield('header')
        {{--@endif--}}
        <!-- MAIN CONTENT -->
        <div class="main_content">
            <h2>@yield('title')</h2>
            <hr class="main-line" />
            <div class="content">
                @if(Session::has('message'))
                    <div class="alert alert-info">
                        {{Session::get('message')}}
                    </div>
                @endif
                @foreach($errors->all() as $error)
                    <div class="alert alert-danger">
                        {{$error}}
                    </div>
                @endforeach
                @yield('content')

                {{--<p><span class="bold-content">Lijfconcept</span> ondersteund je met empathie en zachtheid de verbinding met jouw lijf terug te vinden en begeleid je op de weg naar meer levensvreugde en gezond-zijn.</p>

                <p>Mensen komen om zeer verschillende redenen naar <span class="bold-content">Lijfconcept</span>. Een veel voorkomende reden is pijn, vaak chronische pijn, waarbij medicijnen niet tot een oplossing leiden. Vaak gaat het om pijn in de onderrug of het hogere deel van de rug, nek en schouders. Weer anderen hebben het gevoel dat zij zich op een doodlopend pad bevinden, waarbij zij met ondersteunende of onderzoekende gesprekken niet verder komen. Dan wordt het tijd om terug te keren naar de wijsheid van je lichaam.  Jou lijf weet meestal het antwoord.</p>

                <p>Voor dat doel biedt <span class="bold-content">Lijfconcept</span> je de diensten aan die je rechts van deze tekst kan vinden. Om persoonlijke aandacht te kunnen geven werkt <span class="bold-content">Lijfconcept</span> met kleine groepen en individuele sessies.</p>

                <a href="#" class="less-meer">Lees meer over ons</a>--}}
            </div>
        </div><!--/ main content-->

        <!-- CATEGORY -->
        <div class="main_category">
            <h2>Search</h2>
            <hr class="main-line" />
            @section('sidebar')
                <ul>
                    {!! Form::open(array('action' => 'ClassifiedsController@search', 'method' => 'GET')) !!}
                    {!! Form::text('searchString', null, array('class' => 'form-control', 'placeholder' => 'Search Listings...')) !!}
                    {!! Form::close() !!}
                </ul>
                <br>
                <ul class="list-group">
                    @foreach($categories as $category)
                        <li><a href="/categories/{{$category->id}}" class="list-group-item" ><i></i><span>{{$category->name}}</span></a></li>
                    @endforeach
                </ul>
            @show
        </div><!--/ category-->
        <div class="clear"></div>

        <!-- SLIDER -->
        <div class="main-slider" id="slider">
            <ul>
                <li>
                    <div>
                        <a href="#">
                            <img alt="" src="/css/images/slider/1.jpg">
                            <h4>New Features</h4>
                        </a>
                    </div>
                </li>
                <li>
                    <div>
                        <a href="#">
                            <img alt="" src="/css/images/slider/2.jpg">
                            <h4>News</h4>
                        </a>
                    </div>
                </li>
                <li>
                    <div>
                        <a href="#">
                            <img alt="" src="/css/images/slider/3.jpg">
                            <h4>Technical Support</h4>
                        </a>
                    </div>
                </li>
            </ul>
        </div>
        <div class="nav-main-slider" id="nav-slider">
            <ul>
                <li class="active"><a></a></li>
                <li><a></a></li>
                <li><a></a></li>
            </ul>
        </div>
        <!--/ slider-->
    </div><!--/ main-->
</div>
<div class="clear"></div>

<!-- FOOTER -->
<div class="footer">
    <div class="pink-footer">
        <div class="container content-pink">
            <h1>Volg lijfconcept op de volgende social media kanalen</h1>
            <div class="social-icons">
                <a href="#" class="facebook"><i></i><span>Facebook</span></a>
                <a href="#" class="linkedin"><i></i><span>Linkedin</span></a>
            </div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="gray-footer">
        <div class="container content-gray">
            <div class="copyright">© Copyright 2016 Laravel Project</div>
            <div class="rights">All rights reserved</div>
        </div>
        <div class="clear"></div>
    </div>
</div><!--/ footer-->

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"></script>

</body>
</html>

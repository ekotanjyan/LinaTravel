{{App::setLocale(Session::get('lang'))}}
<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Travelo | Responsive HTML5 Travel Template">
    <meta name="author" content="SoapTheme">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Theme Styles -->
    <link rel="stylesheet" href="{{URL::asset('asset/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('asset/css/font-awesome.min.css')}}">
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{URL::asset('asset/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('asset/css/tours/tourstyle.css')}}">
    
    <!-- Current Page Styles -->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('asset/components/revolution_slider/css/settings.css')}}" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{URL::asset('asset/components/revolution_slider/css/style.css')}}" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{URL::asset('asset/components/jquery.bxslider/jquery.bxslider.css')}}" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{URL::asset('asset/components/flexslider/flexslider.css')}}" media="screen" />
    
    <!-- Main Style -->
    <link id="main-style" rel="stylesheet" href="{{URL::asset('asset/css/main_style.css')}}">
    
    <!-- Custom Styles -->
    <link rel="stylesheet" href="{{URL::asset('asset/css/custom.css')}}">

    <!-- Updated Styles -->
    <link rel="stylesheet" href="{{URL::asset('asset/css/updates.css')}}">

    <!-- Updated Styles -->
    <link rel="stylesheet" href="{{URL::asset('asset/css/updates.css')}}">
    
    <!-- Responsive Styles -->
    <link rel="stylesheet" href="{{URL::asset('asset/css/responsive.css')}}">
    
    <!-- CSS for IE -->
    <!--[if lte IE 9]>
        <link rel="stylesheet" type="text/css" href="css/ie.css" />
    <![endif]-->
    
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script type='text/javascript' src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
      <script type='text/javascript' src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script>
    <![endif]-->

    <!-- Javascript Page Loader -->
    <script type="text/javascript" src="{{URL::asset('asset/js/pace.min.js')}}" data-pace-options='{ "ajax": false }'></script>
    @if(Request::url() == "http://localhost:8000/home")<script type="text/javascript" src="{{URL::asset('asset/js/page-loading.js')}}"></script>@endif
</head>
<body>
<div>
  <header> @include('layout.header') </header>
  <div class="slidebar"> @yield('slidebar') </div>
  <div class="contents"> @yield('content') </div>
  <footer> @include('layout.footer') </footer>
</div>
</body>
</html>
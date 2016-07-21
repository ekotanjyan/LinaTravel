<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="{{URL::asset('asset/css/bootstrap.min.css')}}">

    <!-- MetisMenu CSS -->
    <link href="{{URL::asset('asset/css/metisMenu.min.css')}}" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="{{URL::asset('asset/css/dataTables.bootstrap.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{URL::asset('asset/css/sb-admin-2.css')}}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{URL::asset('asset/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- jQuery -->
    <script src="{{URL::asset('asset/js/jquery-1.11.1.min.js')}}"></script>
</head><body>
@if(Session::has('login'))
<!-- Navigation -->
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <!-- /.navbar-header -->


    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
                <li class="sidebar-search">
                    <form method="get" ><div class="input-group custom-search-form">
                            <input type="hidden" name="r" value="{{Input::get('r')}}">
                            <input type="text" class="form-control" placeholder="Search..." name="s">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div></form>
                    <!-- /input-group -->
                </li>
                <li>
                    <a href="admin"><i class="fa fa-dashboard fa-fw"></i>Destinations</a>
                </li> <li>
                    <a href="admin?r=tours"><i class="fa fa-dashboard fa-fw"></i>Tours</a>
                </li><li>
                    <a href="admin?r=partners"><i class="fa fa-dashboard fa-fw"></i>Partners</a>
                </li><li>
                    <a href="admin?r=didyouknow"><i class="fa fa-dashboard fa-fw"></i>Info</a>
                </li><li>
                    <a href="admin?r=cruises"><i class="fa fa-dashboard fa-fw"></i>Cruises</a>
                </li><li>
                    <a href="admin?r=about"><i class="fa fa-dashboard fa-fw"></i>About</a>
                </li>
            </ul>
        </div>
        <!-- /.sidebar-collapse -->
    </div>
    <!-- /.navbar-static-side -->
</nav>
    @endif
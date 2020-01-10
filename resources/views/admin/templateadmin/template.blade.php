<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('admin/plugins/images/favicon.png')}}">
    <title>@yield('titel')</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{asset('admin/html/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="{{asset('admin/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css')}}" rel="stylesheet">
    <!-- toast CSS -->
    <link href="{{asset('admin/plugins/bower_components/toast-master/css/jquery.toast.css')}}" rel="stylesheet">
    <!-- morris CSS -->
    <link href="{{asset('admin/plugins/bower_components/morrisjs/morris.css')}}" rel="stylesheet">
    <!-- chartist CSS -->
    <link href="{{asset('admin/plugins/bower_components/chartist-js/dist/chartist.min.css')}}" rel="stylesheet">
    <link href="{{asset('admin/plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css')}}" rel="stylesheet">
    <!-- animation CSS -->
    <link href="{{asset('admin/html/css/animate.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{asset('admin/html/css/style.css')}}" rel="stylesheet">
    <!-- color CSS -->
    <link href="{{asset('admin/html/css/colors/default.css')}}" id="theme" rel="stylesheet">

    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header">
    <!-- ============================================================== -->
    <!-- Preloader -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
        </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Wrapper -->
    <!-- ============================================================== -->
    <div id="wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header">
                <div class="top-left-part">
                    <!-- Logo -->
                    <a class="logo" href="dashboard.html">
                        <!-- Logo icon image, you can use font-icon also -->
                        <b>
                            <!--This is dark logo icon-->
                            <img src="{{asset('admin/plugins/images/admin-logo.png')}}" alt="home" class="dark-logo" />
                            <!--This is light logo icon-->
                            <img src="{{asset('admin/plugins/images/admin-logo-dark.png')}}" alt="home" class="light-logo" />
                        </b>
                        <!-- Logo text image you can use text also -->
                        <span class="hidden-xs">
                            <!--This is dark logo text-->
                            <img src="{{asset('admin/plugins/images/admin-text.png')}}" alt="home" class="dark-logo" />
                            <!--This is light logo text-->
                            <img src="{{asset('admin/plugins/images/admin-text-dark.png')}}" alt="home" class="light-logo" />
                        </span> 
                    </a>
                </div>
                <!-- /Logo -->
                <ul class="nav navbar-top-links navbar-right pull-right">
                    <li>
                        <a class="nav-toggler open-close waves-effect waves-light hidden-md hidden-lg" href="javascript:void(0)"><i class="fa fa-bars"></i></a>
                    </li>
                    <li>
                        <form role="search" class="app-search hidden-sm hidden-xs m-r-10">
                            <input type="text" placeholder="Search..." class="form-control"> 
                            <a href="">
                                <i class="fa fa-search"></i>
                            </a> 
                        </form>
                    </li>
                    <li>
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
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </li>
                </ul>
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>
        <!-- End Top Navigation -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav slimscrollsidebar">
                <div class="sidebar-head">
                    <h3><span class="fa-fw open-close"><i class="ti-close ti-menu"></i></span> <span class="hide-menu">Navigation</span></h3>
                </div>
                <ul class="nav" id="side-menu">
                    <li style="padding: 70px 0 0;">
                        <a href="dashboard.html" class="waves-effect"><i class="fa fa-clock-o fa-fw" aria-hidden="true"></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="" class="waves-effect"><i class="fa fa-user fa-fw" aria-hidden="true"></i>Companies</a>
                    </li>
                    <li>
                        <a href="" class="waves-effect"><i class="fa fa-table fa-fw" aria-hidden="true"></i>Employees</a>
                    </li>
                    <li>
                        <a href="" class="waves-effect"><i class="fa fa-font fa-fw" aria-hidden="true"></i>Other</a>
                    </li>
                    <li>
                        <a href="" class="waves-effect"><i class="fa fa-globe fa-fw" aria-hidden="true"></i>Other</a>
                    </li>
                    <li>
                        <a href="" class="waves-effect"><i class="fa fa-columns fa-fw" aria-hidden="true"></i>Other</a>
                    </li>
                    <li>
                        <a href="" class="waves-effect"><i class="fa fa-info-circle fa-fw" aria-hidden="true"></i>Other</a>
                    </li>

                </ul>
            </div>
            
        </div>
        <!-- ============================================================== -->
        <!-- End Left Sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Dashboard</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>

                <!-- Content -->
                @yield('contentadmin')
                <!-- EndContent -->


            </div>
            <!-- /.container-fluid -->
            <footer class="footer text-center"> 2017 &copy; Rifqy </footer>
        </div>
        <!-- ============================================================== -->
        <!-- End Page Content -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{asset('admin/plugins/bower_components/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('admin/html/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="{{asset('admin/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js')}}"></script>
    <!--slimscroll JavaScript -->
    <script src="{{asset('admin/html/js/jquery.slimscroll.js')}}"></script>
    <!--Wave Effects -->
    <script src="{{asset('admin/html/js/waves.js')}}"></script>
    <!--Counter js -->
    <script src="{{asset('admin/plugins/bower_components/waypoints/lib/jquery.waypoints.js')}}"></script>
    <script src="{{asset('admin/plugins/bower_components/counterup/jquery.counterup.min.js')}}"></script>
    <!-- chartist chart -->
    <script src="{{asset('admin/plugins/bower_components/chartist-js/dist/chartist.min.js')}}"></script>
    <script src="{{asset('admin/plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js')}}"></script>
    <!-- Sparkline chart JavaScript -->
    <script src="{{asset('admin/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
    <!-- Custom Theme JavaScript -->
    <script src="{{asset('admin/html/js/custom.min.js')}}"></script>
    <script src="{{asset('admin/html/js/dashboard1.js')}}"></script>
    <script src="{{asset('admin/plugins/bower_components/toast-master/js/jquery.toast.js')}}"></script>
</body>

</html>

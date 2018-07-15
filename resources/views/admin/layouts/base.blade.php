<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>{{ config('app.name') }} | Admin</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.4 -->
    <link rel="stylesheet" href="{{ asset('/admin/bootstrap/css/bootstrap.min.css') }}">
    <!-- icons -->
    <link rel="stylesheet" href="{{ asset('/admin/dist/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/admin/dist/css/ionicons.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('/admin/dist/css/AdminLTE.css') }}">
    <link rel="stylesheet" href="{{ asset('/admin/dist/css/iransans.css') }}">
    <link rel="stylesheet" href="{{ asset('/admin/dist/css/skins/skin-green.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/admin/dist/css/bootstrap-rtl.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/admin/dist/css/mine.css') }}">
    @yield('style')
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="skin-green sidebar-mini">
<div class="wrapper">

    <!-- Main Header -->
    <header class="main-header">

        <!-- Logo -->
        <a href="index2.html" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>T</b></span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>T</b>i<b>T</b>ar</span>
        </a>

        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
            <!-- Navbar Right Menu -->
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- Messages: style can be found in dropdown.less-->
                    <li class="dropdown messages-menu">
                        <!-- Menu toggle button -->
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-envelope-o"></i>
                            <span class="label label-danger">2</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">2 نظر خوانده نشده</li>
                            <li>
                                <!-- inner menu: contains the messages -->
                                <ul class="menu">
                                    <li><!-- start message -->
                                        <a href="#">
                                            <div class="pull-right">
                                                <!-- User Image -->
                                                <img src="{{ asset('/admin/dist/img/user.jpg') }}" class="img-circle">
                                            </div>
                                            <!-- Message title and timestamp -->
                                            <h4>آرش حاتمی</h4>
                                            <!-- The message -->
                                            <p>پیام آزمایشی</p>
                                        </a>
                                    </li><!-- end message -->
                                    <li><!-- start message -->
                                        <a href="#">
                                            <div class="pull-right">
                                                <!-- User Image -->
                                                <img src="{{ asset('/admin/dist/img/user.jpg') }}"
                                                     class="img-circle">
                                            </div>
                                            <!-- Message title and timestamp -->
                                            <h4>آرش حاتمی</h4>
                                            <!-- The message -->
                                            <p>پیام آزمایشی</p>
                                        </a>
                                    </li><!-- end message -->
                                </ul><!-- /.menu -->
                            </li>
                            <li class="footer"><a href="#">مشاهده تمام نظرات</a></li>
                        </ul>
                    </li><!-- /.messages-menu -->

                    <!-- Notifications Menu -->
                    <li class="dropdown notifications-menu">
                        <!-- Menu toggle button -->
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-bell-o"></i>
                            <span class="label label-warning">1</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">1 پیغام جدید</li>
                            <li>
                                <!-- Inner Menu: contains the notifications -->
                                <ul class="menu">
                                    <li><!-- start notification -->
                                        <a href="#">
                                            <i class="fa fa-users text-aqua"></i> امروز 5 ثبت نام جدید داشتید
                                        </a>
                                    </li><!-- end notification -->
                                </ul>
                            </li>
                            <li class="footer"><a href="#">مشاهده تمام پیغام ها</a></li>
                        </ul>
                    </li>
                    <!-- User Account Menu -->
                    <li class="dropdown user user-menu">
                        <!-- Menu Toggle Button -->
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <!-- The user image in the navbar-->
                            <img src="{{ asset('/admin/dist/img/user.jpg') }}" class="user-image">
                            <!-- hidden-xs hides the username on small devices so only the image appears. -->
                            <span class="hidden-xs">{{ $authUser->name }}</span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- The user image in the menu -->
                            <li class="user-header">
                                <img src="{{ asset('/admin/dist/img/user.jpg') }}" class="img-circle">
                                <p>مدیر سایت</p>
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="#" class="btn btn-default btn-flat">پروفایل</a>
                                </div>
                                <div class="pull-right">
                                    <a href="{{ route('logout') }}" class="btn btn-default btn-flat" onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">خروج</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                          style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

            <!-- Sidebar user panel (optional) -->
            <div class="user-panel">
                <div class="pull-right image">
                    <img src="{{ asset('/admin/dist/img/user.jpg') }}" class="img-circle">
                </div>
                <div class="pull-left info">
                    <p>{{ $authUser->name }}</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i>
                        مدیر سایت
                    </a>
                </div>
            </div>

            <!-- search form (Optional) -->
            <form action="#" method="get" class="sidebar-form">
                <div class="input-group">
                    <input type="text" name="q" class="form-control" placeholder="جستجو ...">
                    <span class="input-group-btn">
                        <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i
                                    class="fa fa-search"></i></button>
              </span>
                </div>
            </form>
            <!-- /.search form -->
            <!-- Sidebar Menu -->
        @yield('sidebar')
        <!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        @if (Session::has('message'))
            <div id="message" class="ok">
                {{ Session::get('message') }}
            </div>
        @endif
        @if (Session::has('error'))
            <div id="message" class="error">
                {{ Session::get('error') }}
            </div>
    @endif
    <!-- Content Header (Page header) -->
    @yield('header')
    <!-- Main content -->
        <section class="content">
            <br>
            @yield('content')
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->

    <!-- Main Footer -->
    <footer class="main-footer">
        آتریاد
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Create the tabs -->
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
            <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
            <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
            <!-- Home tab content -->
            <div class="tab-pane active" id="control-sidebar-home-tab">
                <h3 class="control-sidebar-heading">Recent Activity</h3>
                <ul class="control-sidebar-menu">
                    <li>
                        <a href="#">
                            <i class="menu-icon fa fa-birthday-cake bg-red"></i>
                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>
                                <p>Will be 23 on April 24th</p>
                            </div>
                        </a>
                    </li>
                </ul><!-- /.control-sidebar-menu -->

                <h3 class="control-sidebar-heading">Tasks Progress</h3>
                <ul class="control-sidebar-menu">
                    <li>
                        <a href="#">
                            <h4 class="control-sidebar-subheading">
                                Custom Template Design
                                <span class="label label-danger pull-right">70%</span>
                            </h4>
                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                            </div>
                        </a>
                    </li>
                </ul><!-- /.control-sidebar-menu -->

            </div><!-- /.tab-pane -->
            <!-- Stats tab content -->
            <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div><!-- /.tab-pane -->
            <!-- Settings tab content -->
            <div class="tab-pane" id="control-sidebar-settings-tab">
                <form method="post">
                    <h3 class="control-sidebar-heading">General Settings</h3>
                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Report panel usage
                            <input type="checkbox" class="pull-right" checked>
                        </label>
                        <p>
                            Some information about this general settings option
                        </p>
                    </div><!-- /.form-group -->
                </form>
            </div><!-- /.tab-pane -->
        </div>
    </aside><!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
</div><!-- ./wrapper -->
<!-- jQuery 2.1.4 -->
<script src="{{ asset('/admin/plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>
<!-- Bootstrap 3.3.4 -->
<script src="{{ asset('/admin/bootstrap/js/bootstrap.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('/admin/dist/js/app.min.js') }}"></script>
<script src="{{ asset('/admin/dist/js/polyfill.min.js') }}"></script>
<script type='application/javascript' src="{{ asset('/admin/dist/js/fast_click.js') }}"></script>
<script type='application/javascript'>
    if ('addEventListener' in document) {
        document.addEventListener('DOMContentLoaded', function () {
            FastClick.attach(document.body);
        }, false);
    }
</script>
<script src="{{ asset('admin/dist/js/mine.js') }}"></script>
@yield('script')
</body>
</html>

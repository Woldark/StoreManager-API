<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>{{ config('app.name') }} | Admin</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="{{ asset('/admin/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/admin/dist/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/admin/dist/css/ionicons.min.css') }}">
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
    <header class="main-header">
        <a href="index2.html" class="logo">
            <span class="logo-lg">Malayer <b>University</b></span>
        </a>
        <nav class="navbar navbar-static-top" role="navigation">
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="{{ asset('/admin/dist/img/user.jpg') }}" class="user-image">
                            <span class="hidden-xs">{{ $authUser->name }}</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="user-header">
                                <img src="{{ asset('/admin/dist/img/user.jpg') }}" class="img-circle">
                                <p>مدیر سایت</p>
                            </li>
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
    <aside class="main-sidebar">
        <section class="sidebar">
            <div class="user-panel">
                <div class="pull-right image">
                    <img src="{{ asset('/admin/dist/img/user.jpg') }}" class="img-circle">
                </div>
                <div class="pull-left info">
                    <p>{{ $authUser->name }}</p>
                    <a href="#"><i class="fa fa-circle text-success"></i>
                        مدیر سایت
                    </a>
                </div>
            </div>
            @yield('sidebar')
        </section>
    </aside>
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
        @yield('header')
        <section class="content">
            <br>
            @yield('content')
        </section>
    </div>
    <footer class="main-footer" style="text-align: center; font-size: smaller">
        Designed & Developed By <a href="http://arash-hatami.ir" target="_blank">Arash Hatami</a>
    </footer>
</div>
<script src="{{ asset('/admin/plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>
<script src="{{ asset('/admin/bootstrap/js/bootstrap.min.js') }}"></script>
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
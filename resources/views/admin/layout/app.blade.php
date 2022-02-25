<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="/cms/css/bootstrap.min.css">
    <link rel="stylesheet" href="/cms/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="/cms/css/bootadmin.min.css">
    <link rel="stylesheet" href="/cms/vendor/bootstrap-datepicker/css/bootstrap-datepicker.standalone.css">
    <link rel="stylesheet" href="/cms/css/admin.css">

    <style>
        .help-block {
            font-size: 0.9em;
        }
    </style>
    @yield('css')
    @stack('css')

    <title>@yield('title') - {{ env('APP_NAME') }}</title>
</head>
<body class="bg-light">

<nav class="navbar navbar-expand navbar-dark bg-primary">
    <a class="sidebar-toggle mr-3" href="#"><i class="fa fa-bars"></i></a>
    <a class="navbar-brand" href="#">{{ env('APP_NAME') }}</a>

    <div class="navbar-collapse collapse">
        <ul class="navbar-nav ml-auto">
            {{--<li class="nav-item"><a href="#" class="nav-link"><i class="fa fa-envelope"></i> 5</a></li>--}}
            {{--<li class="nav-item"><a href="#" class="nav-link"><i class="fa fa-bell"></i> 3</a></li>--}}
            <li class="nav-item dropdown">
                <a href="#" id="dd_user" class="nav-link dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> {{ \Auth::guard('admin')->user()->name }}</a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dd_user">
                    <a href="{{ route('admin.profile') }}" class="dropdown-item">Profile</a>
                    <a href="{{route('admin.logout')}}" class="dropdown-item">Logout</a>
                </div>
            </li>
        </ul>
    </div>
</nav>

<div class="d-flex">
    <div class="sidebar sidebar-dark bg-dark">
        @include('admin.layout.sidebar')
    </div>

    <div class="content p-4">
        <h2 class="mb-4">@yield('title')</h2>


        @yield('content')

    </div>
</div>

<script src="/cms/js/jquery.min.js"></script>
<script src="/cms/js/bootstrap.bundle.min.js"></script>
<script src="/cms/js/bootadmin.min.js"></script>
<!-- Plugins -->
<script src="{{ asset('cms/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('cms/vendor/tinymce/tinymce.min.js') }}"></script>
<script src="{{ asset('cms/js/text_editor.config.js') }}"></script>

@yield('js')
@stack('js')

</body>
</html>

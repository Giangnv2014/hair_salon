<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ $title or config('app.name') }}</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @include('backends.layouts.includes.style')
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

        @include('backends.layouts.includes.header')

        <!-- Left side column. contains the logo and sidebar -->
        @include('backends.layouts.includes.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    {{ trans('home.dashboard') }}
                    <small>{{ trans('home.control_panel') }}</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> {{ trans('home.home') }}</a></li>
                    <li class="active">{{ trans('home.dashboard') }}</li>
                </ol>
            </section>
            <!-- Main content -->
            <section class="content">
                @include('backends.layouts.includes.notice_messages')

                @yield('content')
            </section>
        </div>
        <!-- /.content-wrapper -->
        @include('backends.layouts.includes.footer')
    </div>
    <!-- ./wrapper -->

    <!-- Scripts -->
    @include('backends.layouts.includes.scripts')
</body>
</html>

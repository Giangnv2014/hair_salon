<header class="main-header">
<!-- Logo -->
<a href="{{ action('Admin\HomeController@index') }}" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><b>{{ trans('home.logo_mini_1') }}</b>{{ trans('home.logo_mini_2') }}</span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><b>{{ config('app.name') }}</b> {{ trans('home.admin') }}</span>
</a>
<!-- Header Navbar: style can be found in header.less -->
<nav class="navbar navbar-static-top">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">{{ trans('home.toggle_navigation') }}</span>
    </a>

    <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <img src="/assets/plugins/admin-lte/img/avatar5.png" class="user-image" alt="User Image">
                    <span class="hidden-xs">{{ $currentUser->name }}</span>
                </a>
                <ul class="dropdown-menu">
                    <!-- User image -->
                    <li class="user-header">
                        <img src="/assets/plugins/admin-lte/img/avatar5.png" class="img-circle" alt="User Image">

                        <p>
                            {{ $currentUser->email }}
                            <small>role_admin</small>
                        </p>
                    </li>

                    <!-- Menu Footer-->
                    <li class="user-footer">
                        <div class="pull-left">
                            <a href="#" class="btn btn-default btn-flat">{{ trans('home.profile') }}</a>
                        </div>
                        <div class="pull-right">
                            <a href="{{ action('Admin\SessionController@destroy') }}" class="btn btn-default btn-flat">
                                {{ trans('home.logout') }}
                            </a>
                        </div>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>
</header>

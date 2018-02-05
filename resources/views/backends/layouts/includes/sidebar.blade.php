<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="/assets/plugins/admin-lte/img/avatar5.png" class="img-circle image-height-45" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{ $currentUser->name }}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> {{ trans('home.online') }}</a>
            </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">{{ trans('home.menu') }}</li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-folder"></i> <span>{{ trans('global.labels.about') }}</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="{{ action('Admin\AboutsController@index') }}">
                            <i class="fa fa-circle-o"></i> {{ trans('home.label.list') }}
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-circle-o"></i> {{ trans('home.label.create') }}
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>

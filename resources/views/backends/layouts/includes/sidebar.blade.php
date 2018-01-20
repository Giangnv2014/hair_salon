<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="/assets/plugins/admin-lte/img/avatar5.png" class="img-circle image-height-45" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>username</p>
                <a href="#"><i class="fa fa-circle text-success"></i> {{ trans('home.online') }}</a>
            </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">{{ trans('home.menu') }}</li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-folder"></i> <span>{{ trans('home.label.role') }}</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="#">
                            <i class="fa fa-circle-o"></i> {{ trans('home.label.list') }}
                        </a>
                    </li>
                    @can('permission', 'role.add')
                        <li>
                            <a href="#">
                                <i class="fa fa-circle-o"></i> {{ trans('home.label.create') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>

            @can('permission', 'role.list')
            <li class="treeview">
                    <a href="#">
                        <i class="fa fa-folder"></i> <span>{{ trans('home.label.role') }}</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li>
                            <a href="{{ action('Admin\RolesController@index') }}">
                                <i class="fa fa-circle-o"></i> {{ trans('home.label.list') }}
                            </a>
                        </li>
                        @can('permission', 'role.add')
                            <li>
                                <a href="{{ action('Admin\RolesController@create') }}">
                                    <i class="fa fa-circle-o"></i> {{ trans('home.label.create') }}
                                </a>
                            </li>
                        @endcan
                    </ul>
            </li>
            @endcan

            @can('permission', 'user.list')
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-folder"></i> <span>{{ trans('home.label.users') }}</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li>
                            <a href="{{ action('Admin\UsersController@index') }}">
                                <i class="fa fa-circle-o"></i> {{ trans('home.label.list') }}
                            </a>
                        </li>
                        @can('permission', 'user.add')
                            <li>
                                <a href="{{ action('Admin\UsersController@create') }}">
                                    <i class="fa fa-circle-o"></i> {{ trans('home.label.create') }}
                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan

            @can('permission', 'topic.list')
                <li>
                    <a href="{{ action('Admin\TopicsController@index') }}">
                        <i class="fa fa-folder"></i> <span>{{ trans('home.label.topic_list') }}</span>
                    </a>
                </li>
            @endcan

            @can('permission', 'about.edit')
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-folder"></i> <span>{{ trans('home.label.about') }}</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        @foreach(array_keys(config('api.about')) as $about)
                            <li>
                                <a href="{{ action('Admin\AboutController@edit', $about) }}">
                                    <i class="fa fa-circle-o"></i> {{ config("api.about.$about") }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </li>
            @endcan
            @can('permission', 'notification.list')
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-folder"></i> <span>{{ trans('notification.notification_list') }}</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li>
                            <a href="{{ action('Admin\NotificationsController@index') }}">
                                <i class="fa fa-circle-o"></i> {{ trans('home.label.list') }}
                            </a>
                        </li>
                        @can('permission', 'notification.add')
                            <li>
                                <a href="{{ action('Admin\NotificationsController@create') }}">
                                    <i class="fa fa-circle-o"></i> {{ trans('home.label.create') }}
                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan
            @can('permission', 'comment.list')
                <li>
                    <a href="{{ action('Admin\CommentsController@index') }}">
                        <i class="fa fa-folder"></i> <span>{{ trans('home.label.comment_list') }}</span>
                    </a>
                </li>
            @endcan
            @can('permission', 'topic_comment.list')
                <li>
                    <a href="{{ action('Admin\TopicCommentsController@index') }}">
                        <i class="fa fa-folder"></i> <span>{{ trans('home.label.topic_comment_list') }}</span>
                     </a>
                </li>
            @endcan
            @can('permission', 'community.list')
                <li>
                    <a href="{{ action('Admin\CommunitiesController@index') }}">
                        <i class="fa fa-folder"></i> <span>{{ trans('community.list') }}</span>
                    </a>
                </li>
            @endcan
            @can('permission', 'feedback.list')
                <li>
                    <a href="{{ action('Admin\FeedbacksController@index') }}">
                        <i class="fa fa-folder"></i> <span>{{ trans('feedback.list') }}</span>
                    </a>
                </li>
            @endcan
            @can('permission', 'community_tag.list')
                <li>
                    <a href="{{ action('Admin\CommunityTagsController@index') }}">
                        <i class="fa fa-folder"></i> <span>{{ trans('community_tag.list') }}</span>
                    </a>
                </li>
            @endcan
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>

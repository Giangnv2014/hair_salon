<header class="site-header">
    <div class="container">
        <a id="branding" href="index.html">
            <img src="assets/plugins/sleek_beauty_salon/images/logo.png" alt="Company name" class="logo">
            <div class="logo-copy">
                <h1 class="site-title">{{ config('app.name') }}</h1>
                <small class="site-description">Slogan goes here</small>
            </div>
        </a> <!-- #branding -->


        <!-- Default snippet for navigation -->
        <div class="main-navigation">
            <button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
            <ul class="menu">
                <li class="menu-item current-menu-item">
                    <a href="{{ action('HomeController@index')}}">{{ trans('global.labels.home') }}</a>
                </li>
                <li class="menu-item">
                    <a href="{{ action('AboutsController@index')}}">{{ trans('global.labels.about') }}</a>
                </li>
                <li class="menu-item">
                    <a href="service.html">{{ trans('global.labels.services') }}</a>
                </li>
                <li class="menu-item">
                    <a href="gallery.html">{{ trans('global.labels.gallery') }}</a>
                </li>
                <li class="menu-item">
                    <a href="contact.html">{{ trans('global.labels.contact') }}</a>
                </li>
            </ul> <!-- .menu -->
        </div> <!-- .main-navigation -->

        <div class="mobile-navigation"></div>
        <div class="clearfix"></div>
    </div>
</header>

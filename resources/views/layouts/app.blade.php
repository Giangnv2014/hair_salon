<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

    @include('layouts.includes.head')


    <body class="homepage header-collapse">

        <div id="site-content">

            @include('layouts.includes.header')

            @yield('content')

            @include('layouts.includes.footer')
        </div>

        @include('layouts.includes.script')

    </body>

</html>

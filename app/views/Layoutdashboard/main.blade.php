<!DOCTYPE html>
<html lang="en">
    <head>
    </head>
    <body>
        @include('Layoutdashboard.head')
        <div id="wrapper">

            @include('Layoutdashboard.nav')

            @yield('content')
            @include('Layoutdashboard.footer')
        </div>

    </body>
</html>
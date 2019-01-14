@extends('layouts/main')
<!DOCTYPE html>
    <!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
    <!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
    <!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
    @yield('head')
</head>


<body>
    <!-- ******HEADER****** -->
    @yield('header')

    @yield('body')

    @yield('footer')

    </body>
    </html>

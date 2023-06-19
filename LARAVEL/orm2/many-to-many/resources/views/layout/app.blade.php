<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Dashboard 1 | Zircos - Responsive Bootstrap 4 Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Responsive bootstrap 4 admin template" name="description">
        <meta content="Coderthemes" name="author">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ URL::asset('assets\images\favicon.ico')}}">

        @include('layout.components.css_js_head', ['css_js_head_key' => 'all'])
    </head>

    <body data-layout="horizontal">

        <!-- Begin page -->
        <div id="wrapper">

           @includeIf('layout.components.top_nav')
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            @yield('content')

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->

        </div>
        <!-- END wrapper -->

        <!-- Right Sidebar -->
        
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        @include('layout.components.right_bar')

        @include('layout.components.footer_js')

    </body>

</html>
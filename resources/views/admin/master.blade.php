<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>SMS A- @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    @include('admin.includes.css')

</head>

<body data-sidebar="dark">

<!-- Begin page -->
<div id="layout-wrapper">

    @include('admin.includes.header')
    @include('admin.includes.menu')
    <div class="main-content">

        <div class="page-content">
            @yield('body')
        </div>


        @include('admin.includes.footer')
    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->


<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>
    @include('admin.includes.js')
</body>


</html>

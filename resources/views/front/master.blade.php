<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>sms - @yield('title') </title>
    <link rel="stylesheet" href="{{ asset('/') }}front/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}front/assets/css/helper.css">

</head>
<body>

    @include('front.includes.menu')
    @yield('body')


    <script src="{{ asset('/') }}front/assets/js/jquery3.6.min.js"></script>
    <script src="{{ asset('/') }}front/assets/js/bootstrap.bundle.min.js"></script>

</body>
</html>


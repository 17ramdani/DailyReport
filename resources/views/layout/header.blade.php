<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="img/logo/logo.png" rel="icon">
    <title>RuangAdmin - Dashboard</title>
    <link href="{{ asset ('style/assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset ('style/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset ('style/assets/css/ruang-admin.min.css') }}" rel="stylesheet">
</head>

<body id="page-top">
    @yield('content')
    <script src="{{ asset ('style/assets/vendor/jquery/jquery.min.js')  }}"></script>
    <script src="{{ asset('style/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('style/assets/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('style/assets/js/ruang-admin.min.js') }}"></script>
    <script src="{{ asset('style/assets/vendor/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('style/assets/js/demo/chart-area-demo.js') }}"></script>
</body>

</html>

<!doctype html>
<html lang=ru>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0">

    <title>Админ панель</title>

    <link rel="stylesheet" href="{{ asset('bootstrap/dist/css/bootstrap.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('components-font-awesome/css/font-awesome.min.css') }}"/>

    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('css/AdminLTE.min.css') }}">

    @yield('styles')

</head>
<body class="hold-transition login-page">

    @yield('content')

</body>
</html>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Utube')</title>
    <script src="https://kit.fontawesome.com/19ce154370.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ url('public/assets/css/style.css') }}">
    @yield('links')
</head>
<body>

@include('includes.header')
@include('includes.sidebar')
@yield('content')
    
<script src='{{ url('public/assets/js/sidebar.js') }}'></script>
<script src='{{ url('public/assets/js/userMenu.js') }}'></script>
@yield('scripts')

</body>
</html>

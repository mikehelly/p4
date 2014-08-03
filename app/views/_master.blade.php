<!DOCTYPE html>
<html>
<head>

    <title>@yield('title', 'skate where');</title>

    <meta charset='utf-8'>
    <link rel='stylesheet' href='{{ asset('css/master.css') }}'>

    @yield('head')

</head>
<body>

	<a href='/'><img class='logo' src='<?php echo URL::asset('/images/skatewhere.jpg'); ?>' alt='Skate Where Logo'></a>

@yield('content')

@yield('footer')

</body>
</html>
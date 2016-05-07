<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>@yield('title')</title>
        <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' />
    </head>
    <body>
        <div class="container">
            @include('layout.site-header')
            @yield('content')
        </div>
    </body>
</html>

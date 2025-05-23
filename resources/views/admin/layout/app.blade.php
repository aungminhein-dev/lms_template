<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="assets/img/favicon.png">
    @include('admin.layout.style')
</head>

<body>

    <div class="main-wrapper">

        @include('admin.layout.navbar')


        @include('admin.layout.sidebar')


        <div class="page-wrapper">
            @yield('content')
            @include('admin.layout.footer')
        </div>
    </div>

    @include('admin.layout.script')
</body>

</html>

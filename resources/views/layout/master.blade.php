<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title','Unknown page')</title>
</head>
<body>
    {{-- Start Nav bar  --}}
    @include('layout.navbar')
    {{-- end nav bar  --}}
    @yield('content')



    @include('layout.sidebar')

</body>
</html>
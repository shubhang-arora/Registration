<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.head')
</head>
<body>
@include('includes.nav')

@yield('content')

@include('includes.footer')
@include('includes.scripts')
</body>
</html>
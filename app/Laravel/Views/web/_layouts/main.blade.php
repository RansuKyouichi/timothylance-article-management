<!DOCTYPE html>
<html lang="en">
<head>
    @include('web._components.metas')
    @include('web._components.styles')
    @yield('page-styles')
</head>

<body>
@include('web._components.topbar')

@yield('content')

@include('web._components.scripts')

@yield('page-scripts')

</body>
</html>
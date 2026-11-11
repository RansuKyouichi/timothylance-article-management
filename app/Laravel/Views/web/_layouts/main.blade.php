
<!DOCTYPE html>
<html lang="en">

<head>
    @include('web._components.metas')
    @include('web._components.styles')

    @yield('page-styles')
</head>

<body>

    @include('web._components.topbar')

    <main class="flex-grow-1 my-5">
        @yield('content')
    </main>

    @include('web._components.footer')

    @include('web._components.scripts')

    @yield('page-scripts')

</body>
</html>

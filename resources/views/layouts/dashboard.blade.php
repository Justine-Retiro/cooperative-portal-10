<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.head')
</head>
<body>
    @include('partials.navbar')

    <div id="wrapper">
        @include('partials.sidebar')

        <div id="page-content-wrapper">
            <div class="container-fluid xyz">
                @yield('content')
            </div>
        </div>
    </div>

    @include('partials.scripts')
</body>
</html>

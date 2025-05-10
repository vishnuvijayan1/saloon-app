<html lang="{{ config('app.locale') }}">

<head>
    <!-- head starts -->
    @include('web.partials.head')
    <!-- head ends -->
</head>

<body>

    <div>
        <!-- section starts -->
        @include('web.partials.sidebar')
        @hasSection('content')
        @yield('content')
        

        @endif
        <!-- section ends -->


    </div>

    @include('web.partials.footer')

</body>

</html>
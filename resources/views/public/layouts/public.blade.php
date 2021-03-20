<!DOCTYPE html>
<html>
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">

    @yield('styles')
</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body>
    @include('public.partials.navbar')
    {{-- @include('public.partials.sidebar') --}}

     @yield('content')


    @include('public.partials.footer')



    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('scripts')

</body>
<!-- END: Body-->

</html>

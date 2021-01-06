<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    @livewireStyles
    <title>{{config('app.name')}}</title>
</head>
<body>
@include('front.layouts.partial.header')
@include('front.layouts.partial.navbar')
@yield('content')
@include('front.layouts.partial.kontak')
@include('front.layouts.partial.visit')
@include('front.layouts.partial.footer')
@livewireScripts
@stack('scripts')
<script src="{{asset('js/app.js')}}"></script>
<script !src="">
    $(function () {
        $(".btn-close").click(function () {
            $(".navbar .nav-full.show").removeClass('show');
        });
    });
</script>
</body>
</html>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/backend.css')}}">
    @livewireStyles
    <title>{{config('app.name')}}</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="navbar-brand"><img src="{{asset('images/logo.png')}}" alt="" class="logo"> Kuta Emergency Panel</div>
    <button class="navbar-toggler" data-toggle="collapse" data-target="#navbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse text-capitalize" id="navbar">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#"><span class="fa fa-dashboard"></span> {{__('page.dashboard')}}</a>
            </li>
            <li class="nav-item dropdown">
                <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown" id="my-profile"> <span class="fa fa-user-circle"></span> {{__('page.profile')}}</a>
                <div class="dropdown-menu" aria-labelledby="my-profile">
                    <div class="navbar-profile">
                        <img src="https://www.flaticon.com/svg/static/icons/svg/3135/3135715.svg" alt="">
                        <h2>I Wayan Budiartha S.Kom</h2>
                        <p>Full Admin</p>
                    </div>
                    <a href="" class="dropdown-item">Edit Profile</a>
                    <a href="" class="dropdown-item">Logout</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" target="_blank" href="{{route('front.home')}}"><span class="fa fa-folder-open"></span> {{__('page.visit')}}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="#"><span class="fa fa-sign-out"></span> {{__('page.logout')}}</a>
            </li>
        </ul>
    </div>
</nav>
<section id="panel">
    <div class="row no-gutters">
        <div class="col-lg-3 panel-side">
            @include('backend.layouts.partial.sidebar')
        </div>
        <div class="col-lg-9 panel-content">
            @yield('content')
        </div>
    </div>
</section>

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

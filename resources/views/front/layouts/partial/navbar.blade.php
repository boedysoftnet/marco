<nav class="navbar navbar-expand-md navbar-dark container">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <ul class="navbar-nav d-flex flex-row nav-contact">
        <li class="nav-item px-2"><a href="" class="nav-link"><span class="fa fa-2x fa-phone"></span></a></li>
        <li class="nav-item px-2"><a href="" class="nav-link"><span class="fa fa-2x fa-search"></span></a></li>
    </ul>
    <div class="collapse navbar-collapse d-lg-flex justify-content-center nav-full" id="navbar">
        <ul class="navbar-nav text-capitalize d-lg-flex justify-content-between">
            <li class="nav-item logo text-capitalize">
                <a href="javascript:void(0)" class="text-white btn-close"><span
                        class="fa fa-2x fa-arrow-left"></span></a>
                <div>
                    <img src="{{asset('images/logo.png')}}" alt="">
                </div>
                <a href="" class="btn btn-primary">{{__('page.appointment')}}</a>
            </li>
            <li class="nav-item"><a href="{{route('front.home')}}" class="nav-link">{{__('page.home')}}</a></li>
            <li class="nav-item dropdown">
                <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown"
                   id="about-us">{{__('page.about-us')}}</a>
                <div class="dropdown-menu" aria-labelledby="about-us">
                    <a href="{{route('front.page-config','our-story')}}" class="dropdown-item">{{__('page.our-story')}}</a>
                    <a href="{{route('front.page-config','vision-mission')}}" class="dropdown-item">{{__('vision-mision')}}</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown"
                   id="menu-service">{{__('page.service')}}</a>
                <div class="dropdown-menu" aria-labelledby="menu-service">
                    <a href="" class="dropdown-item">{{__('page.one-call-doctor')}}</a>
                    <a href="" class="dropdown-item">{{__('page.emergencty-treatment')}}</a>
                    <a href="" class="dropdown-item">{{__('page.doctor-consultant')}}</a>
                </div>
            </li>
            <li class="nav-item"><a href="{{route('front.page-config','contact-us')}}" class="nav-link">{{__('page.contact-us')}}</a></li>
            <li class="nav-item"><a href="" class="nav-link">{{__('page.membership')}}</a></li>
        </ul>
    </div>
</nav>

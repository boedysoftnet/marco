<div class="side-menu">
    <div class="side-profile">
        <img src="https://www.flaticon.com/svg/static/icons/svg/3135/3135715.svg" alt="">
        <h2>I Wayan Budiartha S.Kom</h2>
        <p>Full Admin</p>
        <a href="" class="btn btn-primary btn-sm"><span class="fa fa-edit"></span> {{__('page.update-profile')}}</a>
    </div>
    <a href=""><span class="fa fa-dashboard"></span> {{__('page.dashboard')}}</a>
    <a href="{{route('backend.config.daftar-config')}}"><span class="fa fa-gears"></span> {{__('page.config')}}</a>
    <a href="{{route('backend.story.daftar-story')}}"><span class="fa fa-history"></span> {{__('our-story')}}</a>
    <a href="{{route('backend.dokter.daftar-dokter')}}"><span class="fa fa-users"></span> {{__('medical specialist')}}</a>
    <a href="{{route('backend.lang.daftar-lang')}}"><span class="fa fa-language"></span> {{__('page.language')}}</a>
    <a href="{{route('backend.fasilitas.daftar-fasilitas')}}"><span class="fa fa-gears"></span> {{__('list facilities')}}</a>
    <a href="" data-toggle="collapse" data-target="#services" class="dropdown-toggle"><span class="fa fa-server"></span> {{__('services')}}</a>
    <div class="collapse side-dropdown" id="services">
        <a href="{{route('backend.kategori-service.daftar-kategori-service')}}"><span class="fa fa-plus"></span>{{__('add category')}}</a>
        <a href="{{route('backend.service.register-service')}}"><span class="fa fa-plus"></span>{{__('add service')}}</a>
        <a href="{{route('backend.service.daftar-service')}}"><span class="fa fa-list"></span>{{__('list services')}}</a>
    </div>
    <a href="" data-toggle="collapse" data-target="#news" class="dropdown-toggle"><span class="fa fa-newspaper-o"></span> {{__('page.news')}}</a>
    <div class="collapse side-dropdown" id="news">
        <a href=""><span class="fa fa-plus"></span>{{__('page.add-news')}}</a>
        <a href=""><span class="fa fa-list"></span>{{__('page.list-news')}}</a>
    </div>
    <a href=""><span class="fa fa-user"></span> {{__('page.users')}}</a>
    <a href=""><span class="fa fa-sign-out"></span> {{__('page.logout')}}</a>
</div>

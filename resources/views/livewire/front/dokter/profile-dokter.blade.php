<div class="profile-dokter container p-0">
    <div class="benner-title" style="background: url('https://images.pexels.com/photos/1350560/pexels-photo-1350560.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940')">
        <div class="title">
            <h2>{{__('profile-dokter')}}</h2>
            <ul class="benner-tags">
                <li><a href="">home</a> /</li>
                <li><a href="">dashboard</a>/</li>
                <li><a href="">news</a></li>
            </ul>
        </div>
    </div>
    <div class="row justify-content-center mt-4">
        <div class="col-lg-3 d-flex justify-content-center flex-column align-items-center">
            <img src="{{$dokter->path}}" alt="" class="img-fluid rounded-circle">
            <h2 class="dokter-title mt-3">{{$dokter->nama_dokter}}</h2>
            <x-rating :point="$dokter->rating"/>
            <h3>{!! \App\Helper\BoedySoft::trans($dokter->spesialis) !!}</h3>
            <h3 class="text-uppercase mt-3 border-bottom">{{__('practice-schedule')}}</h3>
            @foreach ($dokter->jadwals as $day=>$item)
                <div class="row">
                    <div class="col-lg-4 text-center font-weight-bold">
                        {{$day}}
                    </div>
                    <div class="col-lg text-center">
                        {{$item['start']}} - {{$item['end']}} <br>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="dokter-info">
        <h2 class="text-capitalize">{{__('dokter-profile')}}</h2>
        {!! \App\Helper\BoedySoft::trans($dokter->profiles) !!}
        <div class="clearfix"></div>
    </div>
    <div class="dokter-list">
        @include('front.layouts.partial.dokter')
    </div>
</div>

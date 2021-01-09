<div class="container profile-service">
    <div class="benner-title" style="background: url('{{$service->path}}')">
        <div class="title">
            <h2>{{\App\Helper\BoedySoft::trans($service->kategoriService->kategoris) }}</h2>
            <ul class="benner-tags">
                <li><a href="">home</a> /</li>
                <li><a href="">dashboard</a>/</li>
                <li><a href="">news</a></li>
            </ul>
        </div>
    </div>
    <div class="row no-gutters my-3 justify-content-lg-end">
        <div class="col-lg-3 widget-left">
            @include('livewire.front.service.widget-service')
        </div>
        <div class="col-lg px-4">
            <div class="title">
                <h2 class="font-weight-bold">{{\App\Helper\BoedySoft::trans($service->juduls) }}</h2>
                <span class="fa fa-calendar"> {{$service->created_at}}</span>
                <span class="fa fa-user-circle"> {{$service->user->name}}</span>
                <hr class="p-0 m-0">
                <p>{!! \App\Helper\BoedySoft::getParameter(\App\Helper\BoedySoft::trans($service->deskripsis),"team-doctor") !!}
                    <span class="clearfix"></span>
                </p>
            </div>
        </div>
    </div>
    @if (count($service->gallerys))
        <div class="row no-gutters justify-content-center mb-3">
            <h2 class="col-lg-12 text-capitalize mt-3 mb-2 text-center">{{__('gallery ')}} {{\App\Helper\BoedySoft::trans($service->juduls) }}</h2>
            @foreach ($service->gallerys as $path)
                <div class="col-lg-3 mb-2 px-2">
                    <div class="img-gallery img-thumbnail">
                        <img src="{{asset('storage/'.$path)}}" alt="">
                    </div>
                </div>
            @endforeach
        </div>
    @endif
{{--
    @push('scripts')
        <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
        <script !src="">
            $(window).scroll(function (event) {
                let scroll=$(window).scrollTop();
                if(scroll>=290){
                    $(".widget-left").addClass('top-fix')
                }else{
                    $(".widget-left").removeClass('top-fix')
                }
            })
        </script>
    @endpush
--}}
</div>

<div class="container profile-service">
    <div class="benner-title" style="background: url('{{$kategoriService->path}}')">
        <div class="title">
            <h2>{{\App\Helper\BoedySoft::trans($kategoriService->kategoris) }}</h2>
            <ul class="benner-tags">
                <li><a href="">home</a> /</li>
                <li><a href="">dashboard</a>/</li>
                <li><a href="">news</a></li>
            </ul>
        </div>
    </div>
    <div class="row no-gutters my-3">
        <div class="col-lg-3 widget-left">
            @if ($kategoriService->service()->count()>0)
                <div class="list-group rounded-0 mb-2">
                    <span
                        class="list-group-item list-group-item-primary font-weight-bold text-capitalize">{{\App\Helper\BoedySoft::trans($kategoriService->kategoris) }}</span>
                    @foreach ($kategoriService->service as $item)
                        <a href="" class="list-group-item py-2">{!! \App\Helper\BoedySoft::trans($item->juduls) !!}</a>
                    @endforeach
                </div>
            @endif
            <div class="list-group rounded-0 mb-2">
                <span
                    class="list-group-item list-group-item-primary font-weight-bold text-capitalize">{{__('list service')}}</span>
                @foreach (\App\Models\KategoriService::get() as $item)
                    <a href="{{route('front.service.profile-service',$item->slug)}}" class="list-group-item py-2"><img
                            src="{{$item->icon}}" alt="" style="height: 23px;"
                            class="mr-2">{{\App\Helper\BoedySoft::trans($item->kategoris) }}</a>
                @endforeach
            </div>
        </div>
        <div class="col-lg px-4">
            <div class="title">
                <h2 class="font-weight-bold">{{\App\Helper\BoedySoft::trans($kategoriService->kategoris) }}</h2>
                <span class="fa fa-calendar"> {{$kategoriService->created_at}}</span>
                <span class="fa fa-user-circle"> {{$kategoriService->user->name}}</span>
                <hr class="p-0 m-0">
                <p>{!! \App\Helper\BoedySoft::trans($kategoriService->deskripsis) !!}
                    <span class="clearfix"></span>
                </p>
            </div>
        </div>
    </div>
</div>

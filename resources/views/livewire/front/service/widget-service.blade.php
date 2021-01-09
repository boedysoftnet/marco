@if ($kategoriService->service()->count()>0)
    <div class="list-group rounded-0 mb-2">
                    <span
                        class="list-group-item list-group-item-primary font-weight-bold text-capitalize">{{\App\Helper\BoedySoft::trans($kategoriService->kategoris) }}</span>
        @foreach ($kategoriService->service as $item)
            <a href="{{route('front.service.info-service',[$kategoriService->slug,$item->slug])}}" class="list-group-item py-2">{!! \App\Helper\BoedySoft::trans($item->juduls) !!}</a>
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

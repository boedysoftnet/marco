<div class="list-group rounded-0 mb-2">
                <span
                    class="list-group-item list-group-item-primary font-weight-bold text-capitalize">{{__('list facilities')}}</span>
    @foreach (\App\Models\Fasilitas::get() as $item)
        <a href="{{route('front.fasilitas.profile-fasilitas',$item->slug)}}" class="list-group-item py-2"><img
                src="{{$item->path}}" alt="" style="height: 23px;"
                class="mr-2 rounded-circle">{{\App\Helper\BoedySoft::trans($item->fasilitas) }}</a>
    @endforeach
</div>

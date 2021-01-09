<div class="list-group rounded-0 mb-2">
                <span
                    class="list-group-item list-group-item-primary font-weight-bold text-capitalize">{{__('list news')}}</span>
    @foreach (\App\Models\Berita::get() as $item)
        <a href="{{route('front.berita.profile-berita',$item->slug)}}" class="list-group-item py-2"><img
                src="{{$item->path}}" alt="" style="height: 23px;"
                class="mr-2">{{\App\Helper\BoedySoft::trans($item->juduls) }}</a>
    @endforeach
</div>

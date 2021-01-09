<section id="fasilitas" class="container">
    @php($fasilitas=\App\Models\Fasilitas::orderBy('id','desc')->paginate(3))
    <div class="fasilitas-titile p-3">
        <h2 class="text-capitalize">{{__('page.facilities')}}</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt expedita illo tenetur voluptatem? A
            adipisci aperiam at blanditiis culpa dolorem doloremque dolores esse harum illo necessitatibus quam
            quisquam, similique vero.</p>
    </div>
    <div class="row no-gutters">
        @foreach ($fasilitas as $item)
            <div class="col-lg-4">
                <a href="{{route('front.fasilitas.profile-fasilitas',$item->slug)}}" class="text-decoration-none">
                    <div class="card rounded-0 card-fasilitas">
                        <img
                            src="{{$item->path}}"
                            alt="" class="card-img-top rounded-0">
                        <div class="card-body p-2">
                            <h2 class="card-title">{!! \App\Helper\BoedySoft::trans($item->fasilitas) !!}</h2>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
</section>

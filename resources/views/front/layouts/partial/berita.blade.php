<section id="berita" class="container">
    @php($beritas=\App\Models\Berita::orderBy('id','desc')->paginate(3))
    <div class="berita-title">
        <h2>{{__('news')}}</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium asperiores consequatur, enim, eos error
            harum necessitatibus odit quis quod quos ratione repellendus sed sequi sunt tempore vero, voluptas!
            Asperiores, iusto!</p>
    </div>
    <div class="row">
        @foreach ($beritas as $item)
            <div class="col-lg-4 mb-3">
                <a href="{{route('front.berita.profile-berita',$item->slug)}}" class="text-decoration-none">
                    <div class="card">
                        <img src="{{$item->path}}" alt="" class="card-img-top">
                        <div class="card-img-overlay">
                            <h2 class="berita-kategori">{{ \App\Helper\BoedySoft::trans($item->kategoriBerita->kategoris) }}</h2>
                        </div>
                        <div class="card-body">
                            <h2 class="card-title">{{\App\Helper\BoedySoft::trans($item->juduls)}}</h2>
                            <p class="card-date">{{$item->created_at}}</p>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
</section>

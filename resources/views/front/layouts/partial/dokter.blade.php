<section id="dokter" class="container">
    @if ($filter??'')
        @php($dokters=\App\Models\Dokter::where('spesialis','like',"%$filter%")->orderBy('id','desc')->paginate(3))
    @else
        @php($dokters=\App\Models\Dokter::orderBy('id','desc')->paginate(3))
    @endif
    <div class="dokter-title">
        <h2>{{__('page.doctor')}}</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum, velit.</p>
    </div>
    <div class="row">
        @foreach ($dokters as $item)
            <div class="col-lg-4 mb-2">
                <a href="{{route('front.dokter.profile-dokter',$item->id)}}" class="dokter-list">
                    <div class="card">
                        <img src="{{$item->path}}" alt="" class="card-img">
                        <div cvilass="card-body text-center">
                            <h2 class="card-title m-0">{{$item->nama_dokter}}</h2>
                            <x-rating :point="$item->rating"/>
                            <h4>{{\App\Helper\BoedySoft::trans($item->spesialis) }}</h4>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
</section>

<div class="container profile-service">
    <div class="benner-title" style="background: url('{{$berita->path}}')">
        <div class="title">
            <h2>{{\App\Helper\BoedySoft::trans($berita->juduls) }}</h2>
            <ul class="benner-tags">
                <li><a href="">home</a> /</li>
                <li><a href="">dashboard</a>/</li>
                <li><a href="">news</a></li>
            </ul>
        </div>
    </div>
    <div class="row no-gutters my-3">
        <div class="col-lg-3 widget-left">
            @include('livewire.front.widget.list-berita')
        </div>
        <div class="col-lg px-4">
            <div class="title">
                <h2 class="font-weight-bold">{{\App\Helper\BoedySoft::trans($berita->kategoriBerita->kategoris) }}</h2>
                <span class="fa fa-calendar"> {{$berita->created_at}}</span> |
                <span class="fa fa-user-circle"> {{$berita->user->name}}</span> |
                <span class="fa fa-link"> {{\App\Helper\BoedySoft::trans($berita->kategoriBerita->kategoris)}}</span> |
                <span class="fa fa-history"> {{$berita->created_at->diffForHumans()}}</span>
                <hr class="p-0 m-0">
                <p>{!! \App\Helper\BoedySoft::trans($berita->deskripsis) !!}
                    <span class="clearfix"></span>
                </p>
            </div>
        </div>
    </div>
    @if (count($berita->gallerys))
        <div class="row no-gutters justify-content-center mb-3">
            <h2 class="col-lg-12 text-capitalize mt-3 mb-2 text-center">{{__('gallery ')}} {{\App\Helper\BoedySoft::trans($berita->juduls) }}</h2>
            @foreach ($berita->gallerys as $path)
                <div class="col-lg-3 mb-2 px-2">
                    <div class="img-gallery img-thumbnail">
                        <img src="{{asset('storage/'.$path)}}" alt="">
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>

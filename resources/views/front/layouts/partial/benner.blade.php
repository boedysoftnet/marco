@php($benners=\App\Models\Benner::orderBy('id','desc')->paginate(6))
<section id="benner" class="container">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            @foreach ($benners as $index=> $item)
                <li data-target="#carouselExampleIndicators" data-slide-to="{{$index}}" class="{{$index==0?'active':''}}"></li>
            @endforeach
        </ol>
        <div class="carousel-inner">
            @foreach ($benners as $index=>$item)
                <div class="carousel-item {{$index==0?'active':''}}">
                    <a href="{{route('front.benner.info-benner',$item->slug)}}">
                        <img
                            src="{{$item->path}}"
                            class="d-block w-100" alt="...">
                    </a>
                </div>
            @endforeach
        </div>
        <a class="carousel-control-prev d-none" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next d-none" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>

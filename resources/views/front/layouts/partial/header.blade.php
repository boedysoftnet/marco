<section id="header" class="container">
    @php($contacts=\App\Models\Kontak::get())
    <div class="brand">
        <img src="{{asset('images/logo.png')}}" alt="">
    </div>
    <div class="nav-right">
        <div class="contact">
            @foreach ($contacts as $item)
                <div class="contact-item text-capitalize    ">
                    <div class="contact-icon"><span class="fa fa-2x fa-phone"></span></div>
                    <div class="contact-text">
                        <h2 class="contact-title">{{$item->nama_kontak}}</h2>
                        <span class="contact-number">{!! $item->kontak !!}</span>
                    </div>
                </div>
            @endforeach
        </div>
        @include('front.layouts.partial.sosmed')
        <div class="lang">
            <a href="" class="dropdown-toggle" data-toggle="dropdown" id="lang">Lang : {{config('app.locale')}}</a>
            @php($langs=\App\Models\Lang::get())
            <ul class="dropdown-menu p-0" aria-labelledby="lang">
                @foreach ($langs as $item)
                    <li class="dropdown-item p-1"><a href="{{route('front.set-lang',$item->slug)}}">{{$item->lang}}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</section>

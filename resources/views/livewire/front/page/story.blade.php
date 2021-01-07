@php($storys=\App\Models\Story::get())
<div class="story">
    <h2 class="story-title">{{__('our-story')}}</h2>
    <div class="timeline" data-vertical-trigger="150px" data-visible-items="2">
        <div class="timeline__wrap">
            <div class="timeline__items">
                @foreach ($storys as $item)
                    <div class="timeline__item">
                        <div class="timeline__content">
                            <div class="row">
                                @if ($item->path)
                                    <img class="img-story col-lg-2 d-none d-lg-block rounded-circle" src="{{$item->path}}" alt="">
                                @endif
                                <div class="col-lg">
                                    <h2><span class="fa fa-calendar-check-o"></span> {{\Carbon\Carbon::parse($item->tanggal)->format('d M Y')}}</h2>
                                    <h3>{!! \App\Helper\BoedySoft::trans($item->juduls) !!}</h3>
                                    <p>{!! \App\Helper\BoedySoft::trans($item->deskripsis) !!}</p>
                                </div>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@push('styles')
    <link rel="stylesheet" href="{{asset('vendor/timeline/css/timeline.min.css')}}">
@endpush
@push('scripts')
    <script src="{{asset('vendor/timeline/js/timeline.min.js')}}"></script>
    <script !src="">
        timeline(document.querySelectorAll('.timeline'), {
            verticalStartPosition: 'right',
            verticalTrigger: '50px'
        });
    </script>
@endpush


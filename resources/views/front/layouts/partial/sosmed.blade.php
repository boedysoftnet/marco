<div class="sosial-media">
    @php($sosmeds=\App\Models\Sosmed::get())
    <span class="mr-2 sosial-media-title">Find Us</span>
    @foreach ($sosmeds as $item)
        <a href="{{$item->url}}" class="sosial-media-link">
            {!! $item->icon !!}
        </a>
    @endforeach
</div>

<div class="container">
    <div class="benner-title" style="background: url('https://images.pexels.com/photos/1350560/pexels-photo-1350560.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940')">
        <div class="title">
            <img src="{{asset('images/logo.png')}}" alt="">
            <h2>{{\App\Helper\BoedySoft::trans($info->juduls) }}</h2>
            <ul class="benner-tags d-none">
                <li><a href="">home</a> /</li>
                <li><a href="">dashboard</a>/</li>
                <li><a href="">news</a></li>
            </ul>
        </div>
    </div>
    <div class="content my-4 m-3">
        <p>{!! \App\Helper\BoedySoft::trans($info->deskripsis) !!}
        <div class="clearfix"></div>
        </p>
    </div>
    @if($info->slug=='our-story')
        @include('livewire.front.page.story')
    @elseif($info->slug=='member-ship')
        <livewire:front.member.register-member/>
    @endif
</div>

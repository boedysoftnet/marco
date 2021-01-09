<div class="container profile-service">
    <div class="benner-title" style="background: url('{{$kategoriService->path}}')">
        <div class="title">
            <h2>{{\App\Helper\BoedySoft::trans($kategoriService->kategoris) }}</h2>
            <ul class="benner-tags">
                <li><a href="">home</a> /</li>
                <li><a href="">dashboard</a>/</li>
                <li><a href="">news</a></li>
            </ul>
        </div>
    </div>
    <div class="row no-gutters my-3">
        <div class="col-lg-3 widget-left">
            @include('livewire.front.service.widget-service')
        </div>
        <div class="col-lg px-4">
            <div class="title">
                <h2 class="font-weight-bold">{{\App\Helper\BoedySoft::trans($kategoriService->kategoris) }}</h2>
                <span class="fa fa-calendar"> {{$kategoriService->created_at}}</span>
                <span class="fa fa-user-circle"> {{$kategoriService->user->name}}</span>
                <hr class="p-0 m-0">
                <p>{!! \App\Helper\BoedySoft::trans($kategoriService->deskripsis) !!}
                    <span class="clearfix"></span>
                </p>
            </div>
        </div>
    </div>
</div>

<div class="mb-4">
    @foreach($penilaians as $item)
        <div class="card comment">
            <div class="card-body py-2">
                <div class="row no-gutters">
                    <div class="d-flex justify-content-start col-lg-2">
                        <div class="d-flex justify-content-center align-items-center">
                            <img src="https://www.flaticon.com/svg/static/icons/svg/64/64572.svg" alt="">
                        </div>
                        <div class="d-flex flex-column title">
                            <x-rating :point="$item->rating"/>
                            <h3 class="text-uppercase">{{$item->nama}}</h3>
                            <p>{{$item->kota}}</p>
                        </div>
                    </div>
                    <div class="comment-item col-lg">
                        <p class="time"><span class="fa fa-history"></span> {{$item->created_at->diffForHumans()}}</p>
                        {{$item->comment}}
                    </div>
                </div>
            </div>
        </div>

    @endforeach
</div>

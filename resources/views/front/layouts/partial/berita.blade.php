<section id="berita" class="container">
    @php($beritas=['https://images.unsplash.com/photo-1561328399-f94d2ce78679?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80','https://images.unsplash.com/photo-1597807197258-3272e1808b0b?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80','https://images.unsplash.com/photo-1580281780460-82d277b0e3f8?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80'])
    <div class="berita-title">
        <h2>{{__('page.health-e')}}</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium asperiores consequatur, enim, eos error
            harum necessitatibus odit quis quod quos ratione repellendus sed sequi sunt tempore vero, voluptas!
            Asperiores, iusto!</p>
    </div>
    <div class="row">
        @foreach ($beritas as $item)
            <div class="col-lg-4 mb-3">
                <div class="card">
                    <img src="{{$item}}" alt="" class="card-img-top">
                    <div class="card-img-overlay">
                        <h2 class="berita-kategori">Health Update</h2>
                    </div>
                    <div class="card-body">
                        <h2 class="card-title">Best Practice for Sefety during the corona virus outbreak</h2>
                        <p class="card-date">{{\Carbon\Carbon::now()}}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>

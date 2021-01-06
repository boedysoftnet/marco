<section id="fasilitas" class="container">
    @php($fasilitas=[1,2,3])
    <div class="fasilitas-titile p-3">
        <h2 class="text-capitalize">{{__('page.facilities')}}</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt expedita illo tenetur voluptatem? A
            adipisci aperiam at blanditiis culpa dolorem doloremque dolores esse harum illo necessitatibus quam
            quisquam, similique vero.</p>
    </div>
    <div class="row no-gutters">
        @foreach ($fasilitas as $item)
            <div class="col-lg-4">
                <div class="card rounded-0 card-fasilitas">
                    <img
                        src="https://images.unsplash.com/photo-1579165466991-467135ad3110?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80"
                        alt="" class="card-img-top rounded-0">
                    <div class="card-body p-2">
                        <h2 class="card-title">Fasilitas 1</h2>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>

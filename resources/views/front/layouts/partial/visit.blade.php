<section id="visit" class="container">
    <div class="row align-items-center">
        <div class="col-lg-3 mb-2">
            <img src="{{asset('images/logo.png')}}" alt="" class="img-fluid img-logo">
        </div>
        <div class="col-lg-6 align-items-center mb-2">
            <div class="row ">
                <h2 class="col-lg-3 text-capitalize visit-title">
                    {{__('page.visit-us')}}
                </h2>
                <p class="col-lg">Jl. Pinang Raya No.53 RT.2/RW.8, Rawamangun Kec. Pulo Gadung
                    Kota Jakarta Timur Daerah Khusus Ibukota Jakarta 13220
                    Floor 3</p>
            </div>
        </div>
        <div class="col-lg-3 mb-2">
            @include('front.layouts.partial.sosmed')
        </div>
    </div>
</section>

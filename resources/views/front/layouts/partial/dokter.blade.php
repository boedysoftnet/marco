<section id="dokter" class="container">
    @php($dokters=['https://asset.kompas.com/crops/N83arebLN4iEndD59AbVI2nMCGA=/0x0:0x0/750x500/data/photo/2013/07/07/2048186shutterstock-144524432p.jpg','https://cdn.idntimes.com/content-images/post/20201103/pexels-gustavo-fring-4173251-3551f68456efc6695bea719b5d8a0bbd_600x400.jpg','https://img.okeinfo.net/content/2020/06/20/611/2233565/tak-kalah-cantik-dengan-dokter-reisa-kenalkan-dokter-lily-HEwryiy8Mn.jpg'])
    <div class="dokter-title">
        <h2>{{__('page.doctor')}}</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum, velit.</p>
    </div>
    <div class="row">
        @foreach ($dokters as $item)
            <div class="col-lg-4 mb-2">
                <div class="card">
                    <img src="{{$item}}" alt="" class="card-img">
                    <div class="card-body text-center">
                        <h2 class="card-title m-0">I Wayan Budiartha S.Kom</h2>
                        <div class="rating">
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </div>
                        <h4>Spesialis</h4>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>

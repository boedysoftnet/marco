@extends('front.layouts.index')
@section('content')
    @include('front.layouts.partial.benner')
    <section id="welcome" class="container">
        <div class="row no-gutters">
            <div class="col-lg-6 d-flex justify-content-center align-items-start flex-column welcome-title">
                <p class="sub-title">Welcome to</p>
                <h2>Kuta Emergency Hospital</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium amet assumenda blanditiis
                    consectetur cupiditate deleniti ex expedita fuga hic illum iure maiores officiis praesentium quae
                    reiciendis, ullam ut voluptate voluptatum.</p>
            </div>
            <div class="col-lg-6">
                <img
                    src="https://www.itnonline.com/sites/default/files/doctor_female_hospital_iStock_000003709313Medium.jpg"
                    alt="">
            </div>
        </div>
    </section>
    @include('front.layouts.partial.fasilitas')
    @include('front.layouts.partial.dokter')
    @include('front.layouts.partial.berita')
@endsection

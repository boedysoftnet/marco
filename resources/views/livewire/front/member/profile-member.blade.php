<div class="container profile-member">
    <div class="benner-title" style="background: url('https://images.pexels.com/photos/3938022/pexels-photo-3938022.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940')">
        <div class="title">
            <img src="{{asset('images/logo.png')}}" alt="">
            <ul class="benner-tags d-none">
                <li><a href="">home</a> /</li>
                <li><a href="">dashboard</a>/</li>
                <li><a href="">news</a></li>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-3 img-custom">
            @include('livewire.front.widget.list-berita')
            @include('livewire.front.widget.list-benner')
        </div>
        <div class="col-lg-9">
            <h2 class="title text-capitalize text-center mb-3">{{__('hallo',['name'=>$member->nama_member])}}</h2>
            <hr>
            <div class="row no-gutters">
                <div class="col-lg-3 d-flex flex-column align-items-center mb-3">
                    <img class="mb-3 rounded-circle"
                         src="{{$member->path}}"
                         alt="">
                    <div class="btn-group small">
                        <a href="{{route('front.member.edit-member')}}" class="btn btn-secondary text-capitalize"><span class="fa fa-edit"></span> {{__('edit profile')}}</a>
                        <a href="{{route('front.member.logout-member')}}" class="btn btn-secondary text-capitalize"><span class="fa fa-sign-out"></span> {{__('logout')}}</a>
                    </div>
                </div>
                <div class="col-lg-9 row p-3">
                    <div class="col-lg-3 font-weight-bold text-capitalize">{{__('full name')}}</div>
                    <div class="col-lg-9 text-capitalize">{{$member->nama_member}}</div>
                    <div class="col-lg-3 font-weight-bold text-capitalize">{{__('email')}}</div>
                    <div class="col-lg-9 text-capitalize">{{$member->email}}</div>
                    <div class="col-lg-3 font-weight-bold text-capitalize">{{__('nationality')}}</div>
                    <div class="col-lg-9 text-capitalize">{{$member->negara}}</div>
                    <div class="col-lg-3 font-weight-bold text-capitalize">{{__('date or brith')}}</div>
                    <div class="col-lg-9 text-capitalize">{{$member->tgl_lahir}}</div>
                    <div class="col-lg-3 font-weight-bold text-capitalize">{{__('gender')}}</div>
                    <div class="col-lg-9 text-capitalize">{{$member->jenis_kelamin}}</div>
                    <div class="col-lg-3 font-weight-bold text-capitalize">{{__('phone')}}</div>
                    <div class="col-lg-9 text-capitalize">{{$member->telpon}}</div>
                    <div class="col-lg-3 font-weight-bold text-capitalize">{{__('address')}}</div>
                    <div class="col-lg-9 text-capitalize">{{$member->alamat}}</div>
                    <div class="col-lg-3 font-weight-bold text-capitalize">{{__('file')}}</div>
                    <div class="col-lg-9 text-capitalize"><a href="{{$member->berkas}}"><span class="fa fa-download"></span>download</a></div>
                    <div class="col-lg-3 font-weight-bold text-capitalize">{{__('join date')}}</div>
                    <div class="col-lg-9 text-capitalize">{{$member->created_at->diffForHumans()}}</div>
                </div>
                <div class="col-lg-12 px-3">
                    <hr>
                    <h2 class="text-capitalize">{{__('file view')}}</h2>
                    <img src="{{$member->berkas}}" class="img-berkas" alt="">
                </div>
            </div>
        </div>
    </div>
</div>

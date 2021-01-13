<div class="container">
    <div class="jumbotron rounded-0 py-3">
        <h2 class="text-capitalize">{{__('update application form')}}</h2>
        <p>Kuta Emergency Privilege Club</p>
        <hr>
        <form wire:submit.prevent="simpan" class="mt-2">
            <div class="row">
                <div class="form-group col-lg-6">
                    <label for="" class="text-capitalize">{{__('full name')}}*</label>
                    <input type="text" class="form-control @error('data.nama_member') is-invalid @enderror"
                           wire:model="data.nama_member">
                    @error('data.nama_member')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group col-lg-6">
                    <label for="" class="text-capitalize">{{__('picture')}}*</label>
                    <input type="file" class="form-control @error('data.path') is-invalid @enderror"
                           wire:model="data.path">
                    @error('data.path')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror

                </div>
            </div>
            <div class="row">
                <div class="form-group col-lg-6">
                    <label for="" class="text-capitalize">{{__('date of brith')}}*</label>
                    <input type="date" class="form-control @error('data.tgl_lahir') is-invalid @enderror"
                           wire:model="data.tgl_lahir">
                    @error('data.tgl_lahir')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror

                </div>
                <div class="form-group col-lg-6">
                    <label for="" class="text-capitalize">{{__('nationality')}}*</label>
                    <select wire:model="data.negara" class="form-control @error('data.negara') is-invalid @enderror">
                        <option value="" selected disabled>--</option>
                        @foreach(json_decode(Countries::getList('en', 'json')) as $index=> $item)
                            <option value="{{$item}}">{{$item}}</option>
                        @endforeach
                    </select>
                    @error('data.negara')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror

                </div>
            </div>
            <div class="row">
                <div class="form-group col-lg-6">
                    <label for="" class="text-capitalize">{{__('phone')}}*</label>
                    <input type="text" class="form-control @error('data.telpon') is-invalid @enderror" wire:model="data.telpon">
                    @error('data.telpon')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group col-lg-6">
                    <label for="" class="text-capitalize">{{__('sex')}}*</label>
                    <select class="form-control @error('data.jenis_kelamin') is-invalid @enderror" wire:model="data.jenis_kelamin">
                        <option value="" selected disabled>--</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                    @error('data.jenis_kelamin')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror

                </div>
            </div>
            <div class="form-group">
                <label for="" class="text-capitalize">{{__('address')}}*</label>
                <textarea class="form-control @error('data.alamat') is-invalid @enderror" wire:model="data.alamat" rows="3"></textarea>
                @error('data.alamat')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror

            </div>
            <div class="row">
                <div class="form-group col-lg-6">
                    <label for="" class="text-capitalize">{{__('email')}}*</label>
                    <input type="text" disabled class="form-control @error('data.email') is-invalid @enderror"
                           wire:model="data.email">
                    @error('data.email')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group col-lg-6">
                    <label for="" class="text-capitalize">{{__('password')}}*</label>
                    <input type="password" class="form-control @error('data.password') is-invalid @enderror"
                           wire:model="data.password">
                    @error('data.password')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
            </div>
            <hr>
            <h2 class="text-capitalize">{{__('additional family member')}}</h2>
            @foreach($keluargas as $index=>$item)
                <div class="card mb-2 rounded-0">
                    <div class="card-body rounded-0">
                        <h5 class="text-capitalize">{{__("addtional family member ".($index+1))}}</h5>
                        <div class="row">
                            <div class="form-group col-lg-4">
                                <label class="text-capitalize font-weight-bold" for="">{{__('name')}}</label>
                                <input type="text" class="form-control" wire:model="data.keluargas.{{$index}}.nama">
                            </div>
                            <div class="form-group col-lg-4">
                                <label class="text-capitalize font-weight-bold" for="">{{__('date of brith')}}</label>
                                <input type="date" class="form-control" wire:model="data.keluargas.{{$index}}.tgl_lahir">
                            </div>
                            <div class="form-group col-lg-4">
                                <label class="text-capitalize font-weight-bold" for="">{{__('sex')}}</label>
                                <select class="form-control" wire:model="data.keluargas.{{$index}}.jenis_kelamin">
                                    <option value="" selected disabled>--</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            <button type="submit" class="btn btn-primary"><span class="fa fa-send"></span> Save</button>
            <a href="{{route('front.member.profile-member')}}" class="btn btn-primary"><span class="fa fa-user-circle"></span> To Profile</a>
        </form>
    </div>
</div>

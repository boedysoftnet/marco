<div wire:ignore>
    <h2 class="text-uppercase">{{__('update profile user')}}</h2>
    <hr>
    <form class="text-capitalize" wire:submit.prevent="simpan">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="form-group col-lg-6">
                        <label for="">{{__('user name')}}</label>
                        <input type="text" class="form-control @error('data.name') is-invalid @enderror" wire:model="data.name">
                        @error('data.name')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="">{{__('email')}}</label>
                        <input type="text" class="form-control @error('data.email') is-invalid @enderror" wire:model="data.email">
                        @error('data.email')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group col-lg-12">
                        <label for="">{{__('picture')}}</label>
                        <input type="file" class="form-control @error('data.path') is-invalid @enderror" wire:model="data.path">
                        @error('data.path')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group col-lg-12">
                        <label for="">{{__('password')}}</label>
                        <input type="password" class="form-control @error('data.password') is-invalid @enderror" wire:model="data.password">
                        @error('data.password')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                </div>
                <div>
                    <button type="submit" class="btn btn-primary text-capitalize"><span
                            class="fa fa-save"></span> {{__('save')}}</button>
                    <a href="{{route('backend.sosmed.daftar-sosmed')}}" class="btn btn-primary"><span
                            class="fa fa-arrow-left"></span> {{__('to-list')}}</a>
                </div>
            </div>
        </div>
    </form>
    <x-loading target="simpan"/>
</div>

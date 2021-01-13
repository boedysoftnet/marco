<div class="container">
    <div class="row justify-content-center mt-2 my-lg-4">
        <div class="col-lg-6">
            <form wire:submit.prevent="login">
                <div class="card rounded-0">
                    <div class="card-header text-uppercase">{{__('login member')}}</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-3">
                                <img
                                    src="https://www.flaticon.com/svg/vstatic/svg/1000/1000946.svg?token=exp=1610515621~hmac=11659755c1b6e88ae88d5d435ab1c2d7"
                                    alt="" class="img-fluid">
                            </div>
                            <div class="col-lg-9">
                                <div class="form-group">
                                    <label for="" class="text-capitalize">{{__('email')}}*</label>
                                    <input type="text" wire:model="email" class="form-control @error('email') is-invalid @enderror">
                                    @error('email')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror

                                </div>
                                <div class="form-group">
                                    <label for="" class="text-capitalize">{{__('password')}}*</label>
                                    <input type="password" wire:model="password" class="form-control @error('password') is-invalid @enderror">
                                    @error('password')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                    @enderror

                                </div>
                                <x-alert/>
                                <button type="submit" class="btn btn-primary text-capitalize"><span class="fa fa-arrow-right"></span> {{__('login now')}}</button>
                                <a class="btn btn-primary text-capitalize" href="{{route('front.page-config','member-ship')}}"><span class="fa fa-sign-in"></span> {{__('register member')}}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
{{--    <x-loading target="login"/>--}}
    {{-- Care about people's approval and you will be their prisoner. --}}
</div>

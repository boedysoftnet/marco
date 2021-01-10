<div class="container" id="info-penilaian">
    <div class="benner-title" style="background: url('https://images.pexels.com/photos/3938022/pexels-photo-3938022.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940')">
        <div class="title">
            <img src="{{asset('images/logo.png')}}" alt="">
            <ul class="benner-tags">
                <li><a href="">home</a> /</li>
                <li><a href="">dashboard</a>/</li>
                <li><a href="">news</a></li>
            </ul>
        </div>
    </div>
    <div class="title my-4">
        <h2 class="text-uppercase font-weight-bold">share your experience with us</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda atque corporis cumque ea eos illum in inventore magnam magni neque nihil nostrum, odio officiis omnis quidem, quod sequi tenetur, voluptas?</p>
    </div>
    <div class="jumbotron text-capitalize p-lg-3 py-2 rounded-0">
        <x-alert/>
        <form class="row mb-3" wire:submit.prevent="addComment">
            <div class="form-group col-lg-4">
                <input type="text" class="form-control text-capitalize @error('data.nama') is-invalid @enderror" wire:model.debounce.300ms="data.nama" placeholder="{{__('your name')}}">
            </div>
            <div class="form-group col-lg-4">
                <input type="text" class="form-control text-capitalize @error('data.email') is-invalid @enderror" wire:model.debounce.300ms="data.email" placeholder="{{__('your email')}}">
            </div>
            <div class="form-group col-lg-4">
                <select name="" id="" wire:model.debounce.300ms="data.kota" class="form-control">
                    <option value="" selected disabled>{{__('select country')}}</option>
                    @foreach(json_decode(Countries::getList('en', 'json')) as $index=> $item)
                        <option value="{{$item}}">{{$item}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-lg-12 mb-2 rating" wire:ignore>
                <div class="form-check form-check-inline col-lg-2">
                    <input class="form-check-input" type="radio" wire:model.debounce.300ms="data.rating" name="inlineRadioOptions" id="inlineRadio1" value="1">
                    <label class="form-check-label" for="inlineRadio1">
                        <span class="fa fa-star active"></span>
                        <span class="fa fa-star "></span>
                        <span class="fa fa-star "></span>
                        <span class="fa fa-star "></span>
                        <span class="fa fa-star"></span>
                    </label>
                </div>
                <div class="form-check form-check-inline col-lg-2">
                    <input class="form-check-input" type="radio" wire:model.debounce.300ms="data.rating" name="inlineRadioOptions" id="inlineRadio2" value="2">
                    <label class="form-check-label" for="inlineRadio2">
                        <span class="fa fa-star active"></span>
                        <span class="fa fa-star active"></span>
                        <span class="fa fa-star "></span>
                        <span class="fa fa-star "></span>
                        <span class="fa fa-star"></span>
                    </label>
                </div>
                <div class="form-check form-check-inline col-lg-2">
                    <input class="form-check-input" type="radio" wire:model.debounce.300ms="data.rating" name="inlineRadioOptions" id="inlineRadio3" value="3">
                    <label class="form-check-label" for="inlineRadio3">
                        <span class="fa fa-star active"></span>
                        <span class="fa fa-star active"></span>
                        <span class="fa fa-star active"></span>
                        <span class="fa fa-star "></span>
                        <span class="fa fa-star"></span>
                    </label>
                </div>
                <div class="form-check form-check-inline col-lg-2">
                    <input class="form-check-input" type="radio" wire:model.debounce.300ms="data.rating" name="inlineRadioOptions" id="inlineRadio4" value="4">
                    <label class="form-check-label" for="inlineRadio4">
                        <span class="fa fa-star active"></span>
                        <span class="fa fa-star active"></span>
                        <span class="fa fa-star active"></span>
                        <span class="fa fa-star active"></span>
                        <span class="fa fa-star"></span>
                    </label>
                </div>
                <div class="form-check form-check-inline col-lg-2">
                    <input class="form-check-input" type="radio" wire:model.debounce.300ms="data.rating" name="inlineRadioOptions" id="inlineRadio5" value="5">
                    <label class="form-check-label" for="inlineRadio5">
                        <span class="fa fa-star active"></span>
                        <span class="fa fa-star active"></span>
                        <span class="fa fa-star active"></span>
                        <span class="fa fa-star active"></span>
                        <span class="fa fa-star active"></span>
                    </label>
                </div>
            </div>
            <div class="col-lg-12 mb-2">
                <textarea cols="30" rows="4" class="form-control text-capitalize  @error('data.comment') is-invalid @enderror"
                          wire:model.debounce.300ms="data.comment" placeholder="{{__('your comment')}}"></textarea>
            </div>
            <div class="col-lg-12">
                <button type="submit" class="btn btn-primary text-capitalize"><span class="fa fa-send"></span> {{__('submit')}}</button>
            </div>
        </form>
    </div>
        @include('livewire.front.penilaian.list-penilaian')
</div>

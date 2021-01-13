<form class="row" wire:submit.prevent="send">
    <div class="col-lg-12">
        <x-alert/>
    </div>
    <div class="form-group col-lg-6">
        <select class="form-control @error('data.kategori_service_id') is-invalid @enderror" wire:model="data.kategori_service_id">
            <option value="" disabled selected>{{__('--')}}</option>
            @foreach(\App\Models\KategoriService::get() as $index=>$item)
                <option value="{{$item->id}}">{{\App\Helper\BoedySoft::trans($item->kategoris)}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group col-lg-6"><input type="text" placeholder="{{__('page.your-name')}}"
                                            class="form-control @error('data.nama') is-invalid @enderror" wire:model="data.nama"></div>
    <div class="form-group col-lg-6"><input type="text" placeholder="{{__('page.your-email')}}"
                                            class="form-control @error('data.email') is-invalid @enderror"  wire:model="data.email"></div>
    <div class="form-group col-lg-6"><input type="text" placeholder="{{__('page.phone')}}"
                                            class="form-control @error('data.telpon') is-invalid @enderror"  wire:model="data.telpon"></div>
    <div class="form-group col-lg-12"><input type="text" placeholder="{{__('page.subject')}}"
                                            class="form-control @error('data.subject') is-invalid @enderror"  wire:model="data.subject"></div>
    <div class="form-group col-lg-12">
                    <textarea cols="30" rows="5" class="form-control @error('data.pesan') is-invalid @enderror"  wire:model.debounce.300ms="data.pesan"
                              placeholder="{{__('page.your-message')}}"></textarea>
    </div>
    <div class="col-lg-12">
        <button type="submit" class="btn btn-primary  text-capitalize"><span
                class="fa fa-send"></span> {{__('page.submit')}}</button>
    </div>
</form>

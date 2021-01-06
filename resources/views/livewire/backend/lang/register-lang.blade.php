<div>
    <div class="title d-flex justify-content-between">
        <h2 class="text-uppercase">{{__('register-language')}}</h2>
    </div>
    <div class="alert alert-light border">
        <form wire:submit.prevent="simpan" class="text-capitalize">
            <div class="row">
                <div class="form-group col-lg-4"><label for="key">{{__('key')}}</label>
                    <input type="text" wire:model="data.slug" class="form-control">
                </div>
                <div class="form-group col-lg"><label for="lang">{{__('lang')}}</label>
                    <input type="text" wire:model="data.lang" class="form-control">
                </div>
            </div>
            <div class="text-capitalize">
                <button type="submit" class="btn btn-primary text-capitalize"><span class="fa fa-save"></span> {{__('save')}}</button>
                <a href="{{route('backend.lang.daftar-lang')}}" class="btn btn-primary"><span class="fa fa-arrow-left"></span> {{__('to-list')}}</a>
            </div>
        </form>
    </div>
    <x-loading/>
</div>

<div wire:ignore>
    <h2 class="text-uppercase">{{__('register sosmed')}}</h2>
    <hr>
    <form class="text-capitalize" wire:submit.prevent="simpan">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="form-group col-lg-4">
                        <label for="">{{__('sosmed')}}</label>
                        <input type="text" class="form-control" wire:model="data.sosmed">
                    </div>
                    <div class="form-group col-lg">
                        <label for="">{{__('url')}}</label>
                        <input type="text" class="form-control" wire:model="data.url">
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

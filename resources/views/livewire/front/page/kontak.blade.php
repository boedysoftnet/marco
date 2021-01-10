<form class="row" wire:submit.prevent="send">
    <div class="form-group col-lg-6"><input type="text" placeholder="{{__('page.your-name')}}"
                                            class="form-control" wire:model="data.nama"></div>
    <div class="form-group col-lg-6"><input type="text" placeholder="{{__('page.your-email')}}"
                                            class="form-control" wire:model="data.email"></div>
    <div class="form-group col-lg-6"><input type="text" placeholder="{{__('page.phone')}}"
                                            class="form-control" wire:model="data.phone"></div>
    <div class="form-group col-lg-6"><input type="text" placeholder="{{__('page.subject')}}"
                                            class="form-control" wire:model="data.subject"></div>
    <div class="form-group col-lg-12">
                    <textarea cols="30" rows="5" class="form-control" wire:model.debounce.300ms="data.message"
                              placeholder="{{__('page.your-message')}}"></textarea>
    </div>
    <div class="col-lg-12">
        <button type="submit" class="btn btn-primary  text-capitalize"><span
                class="fa fa-send"></span> {{__('page.submit')}}</button>
    </div>
</form>

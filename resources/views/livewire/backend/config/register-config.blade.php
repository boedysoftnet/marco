<div>
    <h2 class="text-uppercase">{{$data['slug']}}</h2>
    <hr>
    <div class="card" wire:ignore>
        <div class="card-body">
            @php($langs=\App\Models\Lang::get())
            <form class="text-capitalize" wire:submit.prevent="simpan">
                <nav class="mb-3">
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        @foreach ($langs as $index=>$item)
                            <a class="nav-link {{$index==0?'active':''}}" id="nav-{{$item->slug}}-tab" data-toggle="tab"
                               href="#nav-{{$item->slug}}" role="tab" aria-controls="nav-{{$item->slug}}"
                               aria-selected="true">{{$item->lang}}</a>
                        @endforeach
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    @foreach ($langs as $index=>$item)
                        <div class="tab-pane fade {{$index==0?'show active':''}}" id="nav-{{$item->slug}}"
                             role="tabpanel" aria-labelledby="nav-{{$item->slug}}-tab">
                            <div class="form-group">
                                <label for="">{{__('title')}}</label>
                                <input type="text" wire:model="data.juduls.{{$item->slug}}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">{{__('description')}}</label>
                                <textarea id="{{$item->slug}}" cols="30" rows="5" class="form-control summernote" wire:model="data.deskripsis.{{$item->slug}}"></textarea>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div>
                    <button type="submit" class="btn btn-primary text-capitalize"><span
                            class="fa fa-save"></span> {{__('save')}}</button>
                    <a href="{{route('backend.config.daftar-config')}}" class="btn btn-primary"><span
                            class="fa fa-arrow-left"></span> {{__('to-list')}}</a>
                </div>
            </form>
        </div>
    </div>
    <x-loading target="simpan"/>
    @push('scripts')
        <script !src="">
            $(function () {
                $('.summernote').summernote({
                    height:300,
                    callbacks:{
                        onChange:function (contents,$editable) {
                            @foreach ($langs as $item)
                                var slug=$(this).attr('id');
                                if(slug==="{{$item->slug}}"){
                                    @this.set("data.deskripsis.{{$item->slug}}",contents)
                                }
                            @endforeach
                        }
                    }
                });
            })
        </script>
    @endpush
</div>

<div wire:ignore>
    <h2 class="text-uppercase">{{__('register category service')}}</h2>
    <hr>
    <form class="text-capitalize" wire:submit.prevent="simpan">
        <div class="card">
            <div class="card-body">
                @php($langs=\App\Models\Lang::get())
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
                            <div class="row">
                                <div class="form-group col-lg-12">
                                    <label for="">{{__('category')}}</label>
                                    <input type="text" wire:model="data.kategoris.{{$item->slug}}" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">{{__('deskripsis')}}</label>
                                <textarea id="{{$item->slug}}" cols="30" rows="5" class="form-control summernote"
                                          wire:model="data.deskripsis.{{$item->slug}}"></textarea>
                            </div>
                        </div>
                    @endforeach
                    <div class="row">
                        <div class="form-group col-lg-6">
                            <label for="">{{__('picture')}}</label>
                            <input type="file" wire:model="data.path" class="form-control">
                        </div>
                        <div class="form-group col-lg-6">
                            <label for="">{{__('icon')}}</label>
                            <input type="file" wire:model="data.icon" class="form-control">
                        </div>
                    </div>
                </div>
                <div>
                    <button type="submit" class="btn btn-primary text-capitalize"><span
                            class="fa fa-save"></span> {{__('save')}}</button>
                    <a href="{{route('backend.service.register-service')}}" class="btn btn-primary"><span
                            class="fa fa-arrow-left"></span> {{__('to-list')}}</a>
                </div>
            </div>
        </div>
    </form>
    <x-loading target="simpan"/>
    @push('scripts')
        <script !src="">
            $(function () {
                $('.summernote').summernote({
                    height: 300,
                    callbacks: {
                        onChange: function (contents, $editable) {
                                @foreach ($langs as $item)
                            var slug = $(this).attr('id');
                            if (slug === "{{$item->slug}}") {
                            @this.set("data.deskripsis.{{$item->slug}}", contents)
                            }
                            @endforeach
                        }
                    }
                });
            })
        </script>
    @endpush
</div>

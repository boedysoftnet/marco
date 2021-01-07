<div wire:ignore>
    <h2 class="text-uppercase">{{__('register-doctor')}}</h2>
    <hr>
    <form class="text-capitalize" wire:submit.prevent="simpan">
        <div class="card">
            <div class="card-body">
                <div class="form-group">
                    <label for="">{{__('name')}}</label>
                    <input type="text" wire:model="data.nama_dokter" class="form-control">
                </div>
                <div class="row">
                    <div class="form-group col-lg-6">
                        <label for="">{{__('address')}}</label>
                        <input type="text" wire:model="data.alamat" class="form-control">
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="">{{__('phone')}}</label>
                        <input type="text" wire:model="data.telpon" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="">{{__('email')}}</label>
                    <input type="email" wire:model="data.email" class="form-control">
                </div>
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
                                    <label for="">{{__('specialist')}}</label>
                                    <input type="text" wire:model="data.spesialis.{{$item->slug}}" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">{{__('profile')}}</label>
                                <textarea id="{{$item->slug}}" cols="30" rows="5" class="form-control summernote"
                                          wire:model="data.profiles.{{$item->slug}}"></textarea>
                            </div>
                        </div>
                    @endforeach
                    <div class="row">
                        <div class="form-group col">
                            <label for="">{{__('picture')}}</label>
                            <input type="file" wire:model="data.path" class="form-control">
                        </div>
                        <div class="form-group col-2">
                            <label for="">{{__('rating')}}</label>
                            <input type="number" wire:model="data.rating" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="jadwal">
                    <h2>{{__('schedule-list')}}</h2>
                    @php($days=['Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday'])
                    <nav class="mb-3">
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            @foreach ($days as $index=>$day)
                                <a class="nav-link {{$index==0?'active':''}}" id="nav-{{$day}}-tab" data-toggle="tab"
                                   href="#nav-{{$day}}" role="tab" aria-controls="nav-{{$day}}"
                                   aria-selected="true">{{$day}}</a>
                            @endforeach
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        @foreach ($days as $index=>$day)
                            <div class="tab-pane fade {{$index==0?'show active':''}}" id="nav-{{$day}}"
                                 role="tabpanel" aria-labelledby="nav-{{$day}}-tab">
                                <div class="row">
                                    <div class="form-group col-lg-6">
                                        <label for="">{{__('start')}}</label>
                                        <input type="time" wire:model="data.jadwals.{{$day}}.start" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label for="">{{__('end')}}</label>
                                        <input type="time" wire:model="data.jadwals.{{$day}}.end" class="form-control">
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div>
                    <button type="submit" class="btn btn-primary text-capitalize"><span
                            class="fa fa-save"></span> {{__('save')}}</button>
                    <a href="{{route('backend.story.daftar-story')}}" class="btn btn-primary"><span
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
                            @this.set("data.profiles.{{$item->slug}}", contents)
                            }
                            @endforeach
                        }
                    }
                });
            })
        </script>
    @endpush
</div>

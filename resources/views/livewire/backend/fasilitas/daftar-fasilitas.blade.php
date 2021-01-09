<div>
    <div class="title d-flex justify-content-between">
        <h2 class="text-uppercase">{{__('list fasilitas clinic')}}</h2>
        <a href="{{route('backend.fasilitas.register-fasilitas')}}" class="text-capitalize"><span class="fa fa-plus"></span> {{__('new-data')}}</a>
    </div>
    <div class="input-group mb-2 text-capitalize">
        <div class="input-group-prepend">
            <button class="input-group-text text-capitalize" wire:click="$set('search','')"><span class="fa fa-reply-all mr-2"></span> {{__('all-data')}}</button>
        </div>
        <input type="text" wire:model.debounce.300ms="search" class="form-control text-capitalize" placeholder="{{__('filter-data')}}">
    </div>
    <x-alert/>
    <table class="table table-bordered table-hover">
        <thead class="text-capitalize">
        <tr>
            <th width="10">{{__('no')}}</th>
            <th>{{__('facilities')}}</th>
            <th>{{__('description')}}</th>
            <th>{{__('icon')}}</th>
            <th width="50">#</th>
        </tr>
        </thead>
        <tbody>
        @forelse ($fasilitas as $index=>$item)
            <tr>
                <td>{{$index+1}}</td>
                <td>{{\App\Helper\BoedySoft::trans($item->fasilitas) }}</td>
                <td>{{Str::limit(strip_tags(\App\Helper\BoedySoft::trans($item->deskripsis)),100)}}</td>
                <td width="10"><img src="{{$item->path}}" alt="" class="img-icon rounded-circle"></td>
                <td>
                    <div class="d-flex justify-content-between">
                        <a href="{{route('backend.fasilitas.edit-fasilitas',$item->id)}}"><span class="fa fa-edit"></span></a>
                        <a href="" wire:click.prevent="destroy({{$item->id}})"><span class="fa fa-remove"></span></a>
                    </div>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="7" class="text-capitalize">{{__('sorry not data..!')}}</td>
            </tr>
        @endforelse
        </tbody>
    </table>
    <x-loading target="destroy"/>

</div>

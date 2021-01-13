<div>
    <div class="title d-flex justify-content-between">
        <h2 class="text-uppercase">{{__('list social media')}}</h2>
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
            <th>{{__('icon')}}</th>
            <th>{{__('sosmed')}}</th>
            <th>{{__('url')}}</th>
            <th width="50">#</th>
        </tr>
        </thead>
        <tbody>
        @forelse ($sosmed as $index=>$item)
            <tr>
                <td>{{$index+1}}</td>
                <td width="10" style="font-size: 1.5em" class="text-center">{!! $item->icon !!}</td>
                <td>{{$item->sosmed}}</td>
                <td>{{$item->url}}</td>
                <td>
                    <div class="d-flex justify-content-center">
                        <a href="{{route('backend.sosmed.edit-sosmed',$item->id)}}"><span class="fa fa-edit"></span></a>
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

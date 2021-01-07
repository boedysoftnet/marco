<div>
    <div class="title d-flex justify-content-between">
        <h2 class="text-uppercase">{{__('list-services')}}</h2>
        <a href="{{route('backend.service.register-service')}}" class="text-capitalize"><span class="fa fa-plus"></span> {{__('new-data')}}</a>
    </div>
    <div class="input-group mb-2 text-capitalize">
        <div class="input-group-prepend">
            <button class="input-group-text text-capitalize" wire:click="$set('search','')"><span class="fa fa-reply-all mr-2"></span> {{__('all-data')}}</button>
        </div>
        <input type="text" wire:model.debounce.300ms="search" class="form-control text-capitalize" placeholder="{{__('filter-data')}}">
    </div>
    <table class="table table-bordered table-hover">
        <thead class="text-capitalize">
        <tr>
            <th width="10">{{__('no')}}</th>
            <th>{{__('title')}}</th>
            <th>{{__('description')}}</th>
            <th>{{__('icon')}}</th>
            <th width="50">#</th>
        </tr>
        </thead>
        <tbody>
        @forelse ($services as $index=>$item)
            <tr>
                <td>{{$index+1}}</td>
                <td>{{$item->nama_dokter}}</td>
                <td>{{$item->alamat}}</td>
                <td>{{$item->telpon}}</td>
                <td>{{$item->email}}</td>
                <td><span class="fa fa-star mr-1" style="color: orange"></span>{{$item->rating}}</td>
                <td>
                    <div class="d-flex justify-content-between">
                        <a href="{{route('backend.dokter.edit-dokter',$item->id)}}"><span class="fa fa-edit"></span></a>
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

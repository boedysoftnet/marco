<div>
    <h2 class="text-uppercase">{{__('list-config')}}</h2>
    <hr>
    <div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <thead class="text-capitalize">
                <tr>
                    <th width="10">{{__('no')}}</th>
                    <th>{{__('slug')}}</th>
                    <th>{{__('title')}}</th>
                    <th>{{__('description')}}</th>
                    <th width="10">#</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($configs as $index=>$item)
                    <tr>
                        <td>{{$index+1}}</td>
                        <td>{{$item->slug}}</td>
                        <td>{{$item->judul}}</td>
                        <td>{{$item->deskripsi}}</td>
                        <td>
                            <a href="{{route('backend.config.register-config',$item->id)}}"><span class="fa fa-edit"></span></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

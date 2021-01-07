<div>
    <h2 class="text-uppercase">{{__('list-config')}}</h2>
    <table class="table table-hover table-bordered">
        <thead class="text-capitalize">
        <tr>
            <th width="10">{{__('no')}}</th>
            <th>{{__('title')}}</th>
            <th width="10">#</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($configs as $index=>$item)
            <tr>
                <td>{{$index+1}}</td>
                <td>{{$item->slug}}</td>
                <td>
                    <a href="{{route('backend.config.register-config',$item->id)}}"><span class="fa fa-edit"></span></a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

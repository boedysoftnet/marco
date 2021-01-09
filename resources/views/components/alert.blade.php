<div>
    @if (session()->has('success'))
        <div class="alert alert-success"><span class="fa fa-info-circle"></span> {{session('success')}}</div>
    @endif
</div>

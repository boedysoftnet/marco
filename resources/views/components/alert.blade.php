<div>
    @if (session()->has('success'))
        <div class="alert alert-success"><span class="fa fa-info-circle"></span> {{session('success')}}</div>
    @elseif(session()->has('error'))
        <div class="alert alert-danger"><span class="fa fa-info-circle"></span> {{session('error')}}</div>
    @endif
</div>

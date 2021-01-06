<div wire:loading.flex wire:target="{{$target}}" class="loading flex-column justify-content-center align-items-center">
    <div class="d-flex">
        <div class="spinner-grow text-success" role="status">
            <span class="sr-only">Loading...</span>
        </div>
        <div class="spinner-grow text-dark" role="status">
            <span class="sr-only">Loading...</span>
        </div>
        <div class="spinner-grow text-warning" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <h3><span class="fa fa-info-circle"></span> {{$title}}</h3>
</div>

<div class="container">
    <div class="benner-title" style="background: url('https://images.pexels.com/photos/1350560/pexels-photo-1350560.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940')">
        <div class="title">
            <h2>{{\App\Helper\BoedySoft::trans($info->juduls) }}</h2>
            <ul class="benner-tags">
                <li><a href="">home</a> /</li>
                <li><a href="">dashboard</a>/</li>
                <li><a href="">news</a></li>
            </ul>
        </div>
    </div>
    <div class="content my-4 m-3">
        <p>{!! \App\Helper\BoedySoft::trans($info->deskripsis) !!}</p>
    </div>
</div>

<header class="container" style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px);">
    <div class="container" style="translate: none; rotate: none; scale: none; opacity: 1; transform: translate(0px, 0px);">
        <div class="info">
            <h1 class="title"> {{$service->name}} </h1>
        </div>
    </div>
    <img src="{{$service->getMedia('services')->first()->getUrl()}}" alt="{{$service->name}}" class="bg img-cover" data-speed="1.25" data-lag="0" style="translate: none; rotate: none; scale: none; transform: translate(0px, -70.2499px); will-change: transform;">
</header>
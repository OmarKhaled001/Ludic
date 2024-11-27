<section class="tc-team-style1" @if(app()->getLocale() == 'ar')style="direction: rtl; text-align: right;" @endif>
    <div class="container">
        <div class="mb-80 js-splittext-lines text-center" style="perspective: 400px;"><div style="display: block; text-align: start; position: relative; translate: none; rotate: none; scale: none; transform-origin: 620px 27px; transform: translate3d(0px, 0px, 0px); opacity: 1;"><h2 class="fsz-45">{{ trans('main.products') }}</h2></div></div>
        <div class="members">
            <div class="row">
                @foreach ($services as $service)
                <div class="col-lg-4">
                    <div class="member-colmn">
                        <a href="{{route('service',$service->id)}}" class="team-card wow zoomIn" style="visibility: visible; animation-name: zoomIn;">
                            <div class="img" style="height: 150px;">
                                <img src="{{$service->getMedia('services')->first()->getUrl()}}" alt="{{$service->name}}" class="img-cover">
                            </div>
                            <h4 class="title">{{$service->name}}</h5>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        
    </div>
</section>
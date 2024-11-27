<header class="tc-header-style1"  @if(app()->getLocale() == 'ar')style="direction: rtl; text-align: right;" @endif>
    <div class="header-slider">
        <div class="swiper-wrapper">
            @foreach ($services as $service)
            <div class="swiper-slide">
                <div class="slider-card">
                    <div class="img">
                        <img src="{{$service->getMedia('services')->first()->getUrl()}}" alt="{{$service->name}}" class="img-cover">
                    </div>
                    <div class="info section-padding-x pb-70">
                        <div class="row align-items-end gx-5" style="margin-left: -30px;margin-right: -35px;">
                            <div class="col-lg-6 offset-lg-2" >
                                {{-- @if (app()->getLocale() == 'ar') --}}
                                <h1>{{$service->name}}</h1>
                                {{-- @else
                                <h1 data-swiper-parallax="-2000" class="js-title">{{$service->name}}</h1>
                    
                                @endif --}}
                                <h5 class="fsz-30 mt-30 fw-200">{{$service->subtitle}}</h5>
                            </div>
                            <div class="col-lg-3">
                                <div class="cont pb-30">
                                    <div class="text fsz-17 fw-300 lh-4">
                                        {{ Str::limit($service->details, 99) }}
                                    </div>
                                    <a href="{{route('service',$service->id)}}" class="butn border rounded-pill mt-60 hover-bg-white">
                                        <span> {{ trans('main.view') }} <i class="small ms-1 ti-arrow-top-right"></i> </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

            
           
        </div>
        <div class="slider-controls">
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
</header>
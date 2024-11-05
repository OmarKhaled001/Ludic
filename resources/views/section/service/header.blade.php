<section class="tc-main-img-style1 header"
    style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px);">
    <div class="main-img">
        <img src="{{ $service->getMedia('services')->first()->getUrl() }}" alt="{{ $service->name }}" alt=""
            class="img-cover" data-speed="1.25" data-lag="0"
            style="translate: none; rotate: none; scale: none; transform: translate(0px, -1.49977px); will-change: transform;">
    </div>
    <div class="content">
        <div class="container"
            style="translate: none; rotate: none; scale: none; opacity: 1; transform: translate(0px, 0px);">
            <div class="info">

                <h2 class="title"> <a href="#" class="hover-orange1"> {{ $service->name }} </a> </h2>
            </div>
        </div>
    </div>
</section>
<section class="tc-post-content-style1">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="info">
                    <div class="breadcromb wow fadeInUp slow" data-wow-delay="0.2s"
                        style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                        <a href="#"> Home </a>
                        <span class="icon">/</span>
                        <a href="#"> Products </a>
                        <span class="icon">/</span>
                        <a href="#"> {{ $service->name }}</a>
                    </div>
                    <h6 class="fsz-24 fw-600 mb-60 wow fadeInUp slow" data-wow-delay="0.2s"
                        style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                        <span class="color-orange1">{{ $service->subtitle }}</span>
                    </h6>

                    <h6 class="fsz-24 fw-600 mb-30 wow fadeInUp slow" data-wow-delay="0.2s"
                        style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">Let's learn about
                        {{ $service->name }}</h6>
                    <div class="text fsz-14 color-666 mb-70 wow fadeInUp slow" data-wow-delay="0.2s"
                        style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                        {{ $service->details }}
                    </div>
                </div>
            </div>
        </div>
        @if ($service->products->count() > 0)
            
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="related-posts">
                    <div class="title mb-70">
                        <div class="row align-items-center wow fadeInUp slow" data-wow-delay="0.2s"
                            style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                            <div class="col-lg-8">
                                <h3 class="fsz-45 text-capitalize"> Products </h3>
                            </div>
                            <div class="col-lg-4 mt-4 mt-lg-0">
                                <div class="arrows me-lg-0 ms-lg-auto">
                                    <div class="swiper-button-prev" tabindex="0" role="button"
                                        aria-label="Previous slide" aria-controls="swiper-wrapper-ced30b7b00b21135">
                                    </div>
                                    <div class="swiper-button-next" tabindex="0" role="button"
                                        aria-label="Next slide" aria-controls="swiper-wrapper-ced30b7b00b21135"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="related-slider wow fadeInUp slow swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden"
                        data-wow-delay="0.2s"
                        style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                        <div class="swiper-wrapper" id="swiper-wrapper-ced30b7b00b21135" aria-live="off"
                            style="transform: translate3d(-1654px, 0px, 0px); transition-duration: 0ms;">
                            @foreach ($service->products as $product)
                                <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="{{ $loop->iteration-1 }}"
                                    role="group" aria-label="{{ $loop->iteration / $service->products->count() }}" style="width: 383.5px; margin-right: 30px;">
                                    <div class="post-card">
                                        <a href="#" class="img th-280 radius-7 overflow-hidden d-block">
                                            <img src="{{$product->getMedia('products')->first()->getUrl()}}" alt="{{$product->name}}" alt="" class="img-cover">
                                        </a>
                                        <div class="info pt-30">
                                            <div class="tags color-666 text-uppercase fsz-12">
                                                <a href="#" class="color-orange1"> {{$product->name}}</a>
                                                <span class="circle icon-3 bg-666 rounded-circle mx-3"></span>
                                            </div>
                                            <h3 class="title mt-15"> <a href="#" class="hover-orange1 fsz-24">
                                                {{$product->name}}
                                                </a> </h3>
                                                <p>
                                                    {{$product->details}}
                                                    
                                                </p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                    </div>
                </div>
            </div>
        </div>
        @endif

    </div>$service->
</section>

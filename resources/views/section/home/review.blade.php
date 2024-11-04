<section class="tc-testimonials-style1">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <h6 class="fsz-18 text-uppercase lh-4"> what clients say <br> about us </h6>
                <div class="lg-icon color-orange1"> <i class="la la-quote-right"></i> </div>
            </div>
            <div class="col-lg-8">
                <div class="tc-clients-style1">
                    <div
                        class="clients-slider1 swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden">
                        <div class="swiper-wrapper" id="swiper-wrapper-bbbe4e33852fc931" aria-live="off"
                            style="transform: translate3d(0px, 0px, 0px); transition-duration: 0ms;">
                            @foreach ($reviews as $review)
                                <div class="swiper-slide swiper-slide-duplicate swiper-slide-active"
                                    data-swiper-slide-index="2" role="group"  style="width: 817px;">
                                    <div class="clients-card">
                                        <div class="text fsz-45 fw-600 lh-2 js-splittext-lines" style="perspective: 400px;">
                                        "{{$review->review}}"
                                        </div>
                                        <div class="author">
                                            <div class="au-img">
                                                <img src="{{$review->getMedia('authors')->first()->getUrl()}}" alt=""
                                                    class="img-cover">
                                            </div>
                                            <div class="au-inf">
                                                <h6 class="text-capitalize mb-2 fsz-16 fw-bold">{{$review->author}}</h6>
                                                <p class="text-capitalize fsz-14 color-666">{{$review->posetion}}</p>
                                            </div>
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
    </div>
    <div class="marq-slider swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden">
        <div class="swiper-wrapper" id="swiper-wrapper-4285bccb6572f528" aria-live="off"
            style="transition-duration: 10000ms; transform: translate3d(-4438.99px, 0px, 0px);">
            <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="0" role="group"
                aria-label="1 / 3" style="margin-right: 140px;">
                <a href="#"> Creative </a>
            </div>
            <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="1" role="group"
                aria-label="2 / 3" style="margin-right: 140px;">
                <a href="#"> Flexiable </a>
            </div>
            <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev" data-swiper-slide-index="2"
                role="group" aria-label="3 / 3" style="margin-right: 140px;">
                <a href="#"> Dedicated </a>
            </div>
            <div class="swiper-slide swiper-slide-duplicate-active" data-swiper-slide-index="0" role="group"
                aria-label="1 / 3" style="margin-right: 140px;">
                <a href="#"> Creative </a>
            </div>
            <div class="swiper-slide swiper-slide-duplicate-next" data-swiper-slide-index="1" role="group"
                aria-label="2 / 3" style="margin-right: 140px;">
                <a href="#"> Flexiable </a>
            </div>
            <div class="swiper-slide swiper-slide-prev" data-swiper-slide-index="2" role="group"
                aria-label="3 / 3" style="margin-right: 140px;">
                <a href="#"> Dedicated </a>
            </div>
            <div class="swiper-slide swiper-slide-duplicate swiper-slide-active" data-swiper-slide-index="0"
                role="group" aria-label="1 / 3" style="margin-right: 140px;">
                <a href="#"> Creative </a>
            </div>
            <div class="swiper-slide swiper-slide-duplicate swiper-slide-next" data-swiper-slide-index="1"
                role="group" aria-label="2 / 3" style="margin-right: 140px;">
                <a href="#"> Flexiable </a>
            </div>
            <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev" data-swiper-slide-index="2"
                role="group" aria-label="3 / 3" style="margin-right: 140px;">
                <a href="#"> Dedicated </a>
            </div>
        </div>
        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
    </div>
    <img src="{{ asset('assets') }}/img/c_line3.png" alt="" class="c-line">
</section>

<section class="tc-testimonials-style1" @if(app()->getLocale() == 'ar')style="direction: rtl; text-align: right;" @endif>
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <h6 class="fsz-18 text-uppercase lh-4"> {{ trans('main.what_clients_say') }} <br> {{ trans('main.about_us') }} </h6>
                <div class="lg-icon color-orange1"> <i class="la la-quote-right"></i> </div>
            </div>
            <div class="col-lg-8">
                <div class="tc-clients-style1">
                    <div
                        class="clients-slider1 swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden">
                        <div class="swiper-wrapper" id="swiper-wrapper-2a7f27c3a610391ea" aria-live="off"
                            style="transform: translate3d(-1714px, 0px, 0px); transition-duration: 0ms;">
                            <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next"
                                data-swiper-slide-index="2" role="group" aria-label="3 / 3" style="width: 857px;">
                                <div class="clients-card">
                                    <div class="text fsz-45 fw-600 lh-2 js-splittext-lines" style="perspective: 400px;">
                                            “{{ trans('main.client_testimonial1') }}” 
                                    </div>
                                    <div class="author">
                                        <div class="au-img">
                                            <img src="{{ asset('assets') }}/img/team/team5.jpg" alt="" class="img-cover">
                                        </div>
                                        <div class="au-inf">
                                            <h6 class="text-capitalize mb-2 fsz-16 fw-bold">{{ trans('main.testimonial1_author') }}</h6>
                                            <p class="text-capitalize fsz-14 color-666">{{ trans('main.testimonial1_author_title') }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide-prev" data-swiper-slide-index="0" role="group"
                                aria-label="1 / 3" style="width: 857px;">
                                <div class="clients-card">
                                    <div class="text fsz-45 fw-600 lh-2 js-splittext-lines" style="perspective: 400px;">
                                        “{{ trans('main.client_testimonial2') }}” 
                                    </div>
                                    <div class="author">
                                        <div class="au-img">
                                            <img src="{{ asset('assets') }}/img/team/team2.jpg" alt="" class="img-cover">
                                        </div>
                                        <div class="au-inf">
                                            <h6 class="text-capitalize mb-2 fsz-16 fw-bold">{{ trans('main.testimonial2_author') }}</h6>
                                            <p class="text-capitalize fsz-14 color-666">{{ trans('main.testimonial2_author_title') }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="1" role="group"
                                aria-label="2 / 3" style="width: 857px;">
                                <div class="clients-card">
                                    <div class="text fsz-45 fw-600 lh-2 js-splittext-lines" style="perspective: 400px;">
                                        “{{ trans('main.client_testimonial3') }}” 
                                    </div>
                                    <div class="author">
                                        <div class="au-img">
                                            <img src="{{ asset('assets') }}/img/team/team2.jpg" alt="" class="img-cover">
                                        </div>
                                        <div class="au-inf">
                                            <h6 class="text-capitalize mb-2 fsz-16 fw-bold">{{ trans('main.testimonial3_author') }}</h6>
                                            <p class="text-capitalize fsz-14 color-666">{{ trans('main.testimonial3_author_title') }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide-next" data-swiper-slide-index="2" role="group"
                                aria-label="3 / 3" style="width: 857px;">
                                <div class="clients-card">
                                    <div class="text fsz-45 fw-600 lh-2 js-splittext-lines" style="perspective: 400px;">
                                        “{{ trans('main.client_testimonial5') }}” 
                                    </div>
                                    
                                    <div class="author">
                                        <div class="au-img">
                                            <img src="{{ asset('assets') }}/img/team/team3.jpg" alt="" class="img-cover">
                                        </div>
                                        <div class="au-inf">
                                            <h6 class="text-capitalize mb-2 fsz-16 fw-bold">{{ trans('main.testimonial5_author') }}</h6>
                                            <p class="text-capitalize fsz-14 color-666">{{ trans('main.testimonial5_author_title') }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev"
                                data-swiper-slide-index="0" role="group" aria-label="1 / 3" style="width: 857px;">
                                <div class="clients-card">
                                    <div class="text fsz-45 fw-600 lh-2 js-splittext-lines" style="perspective: 400px;">
                                        “{{ trans('main.client_testimonial4') }}” 

                                    </div>
                                    
                                    <div class="author">
                                        <div class="au-img">
                                            <img src="{{ asset('assets') }}/img/team/team4.jpg" alt="" class="img-cover">
                                        </div>
                                        <div class="au-inf">
                                            <h6 class="text-capitalize mb-2 fsz-16 fw-bold">{{ trans('main.testimonial4_author') }}</h6>
                                            <p class="text-capitalize fsz-14 color-666">{{ trans('main.testimonial4_author_title') }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slider-controls" @if(app()->getLocale() == 'ar')style="direction: rtl; left: 0px; "@else style="right: 0px;" @endif>
                            <div class="swiper-button-prev" tabindex="0" role="button"
                                aria-label="Previous slide" aria-controls="swiper-wrapper-2a7f27c3a610391ea"></div>
                            <div class="swiper-pagination swiper-pagination-fraction swiper-pagination-horizontal">
                                <span class="swiper-pagination-current">2</span> / <span
                                    class="swiper-pagination-total">3</span></div>
                            <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide"
                                aria-controls="swiper-wrapper-2a7f27c3a610391ea"></div>
                        </div>
                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="marq-slider swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden">
        <div class="swiper-wrapper" id="swiper-wrapper-106e88d5733746257" aria-live="off"
            style="transition-duration: 10000ms; transform: translate3d(-2767.29px, 0px, 0px);">
            <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev" data-swiper-slide-index="0"
                role="group" aria-label="1 / 3" style="margin-right: 140px;">
                <a href="#"> {{ trans('main.flexible') }} </a>
            </div>
            <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="1"
                role="group" aria-label="2 / 3" style="margin-right: 140px;">
                <a href="#"> {{ trans('main.fresh') }} </a>
            </div>
            <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next" data-swiper-slide-index="2"
                role="group" aria-label="3 / 3" style="margin-right: 140px;">
                <a href="#"> {{ trans('main.flavorful') }} </a>
            </div>
            <div class="swiper-slide swiper-slide-prev" data-swiper-slide-index="0" role="group"
                aria-label="1 / 3" style="margin-right: 140px;">
                <a href="#"> {{ trans('main.flexible') }} </a>
            </div>
            <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="1" role="group"
                aria-label="2 / 3" style="margin-right: 140px;">
                <a href="#"> {{ trans('main.fresh') }} </a>
            </div>
            <div class="swiper-slide swiper-slide-next" data-swiper-slide-index="2" role="group"
                aria-label="3 / 3" style="margin-right: 140px;">
                <a href="#"> {{ trans('main.flavorful') }} </a>
            </div>
            <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev" data-swiper-slide-index="0"
                role="group" aria-label="1 / 3" style="margin-right: 140px;">
                <a href="#"> {{ trans('main.flexible') }} </a>
            </div>
            <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="1"
                role="group" aria-label="2 / 3" style="margin-right: 140px;">
                <a href="#"> {{ trans('main.fresh') }} </a>
            </div>
            <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next" data-swiper-slide-index="2"
                role="group" aria-label="3 / 3" style="margin-right: 140px;">
                <a href="#"> {{ trans('main.flavorful') }} </a>
            </div>
        </div>
        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
    </div>
    <img src="assets/img/c_line3.png" alt="" class="c-line">
</section>

    <section class="tc-testimonials-style1" @if(app()->getLocale() == 'ar')style="direction: rtl; text-align: right;" @endif>
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    
                       
                    <div class="lg-icon color-orange1  js-splittext-lines">
                         <i class="la la-quote-right"></i> </div>
                </div>
                <div class="col-lg-10">
                    <div class="tc-clients-style1">
                        <div class="clients-slider1 swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden">
                        <div class="text fsz-45 fw-600 lh-2 js-splittext-lines">
                           "{{ trans('main.owner_vision') }}"
                        </div>
                        <hr style="width: 25%">
                        <h6 class="text fsz-20 fw-50  js-splittext-lines">{{ trans('main.business_owner') }}</h6>
                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        
    </section>
<section class="tc-experience-style1 section-padding-x" @if(app()->getLocale() == 'ar')style="direction: rtl; text-align: right;" @endif >

    <div class="container-fluid" style="padding-top: 25px">
        <div class="row justify-content-around align-items-center">

            <div class="col-lg-4">
                <div class="img wow">
                    <img src="{{ asset('assets/img/exp.png') }}" alt="" class="img-cover">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="info wow fadeInUp z-99" data-wow-delay="0.5s">
                    <h3 class="fsz-45 fw-600 mb-30">{{ trans('main.who_we_are') }}</h3>
                    <div class="text fsz-15 color-666">
                            {{ trans('main.who_we_are_description') }}

                    </div>
                    <a href="{{ route('about') }}" class="butn rounded-pill mt-50 hover-bg-black bg-white">
                        <span> {{ trans('main.about_us') }} <i class="small ms-1 ti-arrow-top-right"></i> </span>
                    </a>
                </div>
            </div>

        </div>
    </div>
    <img src="{{ asset('assets/img/c_line.png') }}" alt="" class="c-line wow">
</section>
<section class="tc-team">
    <div class="container text-center">
        <div class="numbers">
            <div class="row justify-content-around align-items-center">
                <div class="col-lg-3">
                    <div class="number-card wow fadeInUp" data-wow-delay="0.2s">
                        <h3 class="perc">+{{ $setting->products_count }} </h3>
                        <h3 class="fsz-45 fw-600">{{ trans('main.products') }} </h3>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="number-card wow fadeInUp" data-wow-delay="0.2s">
                        <h3 class="perc"> +{{ $setting->suppliers_count }} </h3>
                        <h3 class="fsz-45 fw-600">{{ trans('main.suppliers') }} </h3>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="number-card wow fadeInUp" data-wow-delay="0.2s">
                        <h3 class="perc"> +{{ $setting->cagr_count }} </h3>
                        <h3 class="fsz-45 fw-600">{{ trans('main.cagr') }} </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="tc-experience-style1 section-padding-x">
    <div class="container-fluid">
        <div class="row justify-content-around align-items-center">

            <div class="col-lg-4">
                <div class="img wow">
                    <img src="{{ asset('assets/img/exp.png') }}" alt="" class="img-cover">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="info wow fadeInUp z-99" data-wow-delay="0.5s">
                    <h3 class="fsz-45 fw-600 mb-30">Who We Are ? </h3>
                    <div class="text fsz-15 color-666">

                        From the beginning, our goal has extended beyond sales and profits. We are committed to ongoing
                        development driven by specialized research, allowing us to offer the highest quality products,
                        competitive pricing, and reliable, timely supply. ludic's dedication to cultural responsibility
                        continues to evolve, as we share our expertise by providing technical information, training, and
                        supporting clients in growing their businesses both vertically and horizontally.

                    </div>
                    <a href="{{ route('about') }}" class="butn rounded-pill mt-50 hover-bg-black bg-white">
                        <span> About US <i class="small ms-1 ti-arrow-top-right"></i> </span>
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
                        <h3 class="fsz-45 fw-600">Products </h3>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="number-card wow fadeInUp" data-wow-delay="0.2s">
                        <h3 class="perc"> +{{ $setting->suppliers_count }} </h3>
                        <h3 class="fsz-45 fw-600"> Suppliers </h3>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="number-card wow fadeInUp" data-wow-delay="0.2s">
                        <h3 class="perc"> +{{ $setting->cagr_count }} </h3>
                        <h3 class="fsz-45 fw-600"> Cagr </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


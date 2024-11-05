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
        <div class="cases-content wow fadeInUp slow" data-wow-delay="0.4s"
            style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
            <div class="col-lg-8">
                <h3 class="fsz-45 text-capitalize"> Products </h3>
            </div>
            <div class="row mixitup" id="MixItUp4FCD54">
                @foreach ($service->products as $product)
                    <div class="col-lg-4 mix-item">
                        <div class="case-card">
                            <a href="#" class="img" data-fancybox="cases">
                                <img src="{{ $product->getMedia('products')->first()->getUrl() }}" alt=""
                                    class="img-cover">
                            </a>
                            <div class="info">

                                <h3 class="title fsz-35 mb-20"> {{ $product->name }}</h3>
                                <div class="text color-666">{{ $product->details }}</div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        @endif

    </div>
</section>

<section class="tc-latest-cases-style1 mb-90">
    <div class="container">
        <div class="content">
            <h3 class="fsz-45 text-capitalize mb-90 js-splittext-lines" style="perspective: 400px;"><div style="display: block; text-align: center; position: relative; translate: none; rotate: none; scale: none; transform-origin: 620px 27px; transform: translate3d(0px, 0px, 0px); opacity: 1;"> Products </div></h3>
            <div class="cases">
             
                <div class="cases-content wow fadeInUp slow" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                    <div class="row mixitup" id="MixItUp921277">
                        @foreach ($service->products as $product)
                        <div class="col-lg-4 mix-item Architecture Furniture">
                            <div class="case-card">
                                <a href="" class="img" data-fancybox="cases">
                                    <img src="{{$product->getMedia('products')->first()->getUrl()}}" alt="" class="img-cover">
                                </a>
                                <div class="info">
                                    <h3 class="title fsz-35 mb-20"> <a href="" class="hover-orange1"> Polo
                                            {{$product->name}} </a> </h3>
                                    <div class="text color-666">  {{$product->details}} </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                 
                </div>
            </div>
        </div>
    </div>
</section>
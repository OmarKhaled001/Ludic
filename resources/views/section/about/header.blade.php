
<section class="tc-process-style2" @if(app()->getLocale() == 'ar')style="direction: rtl; text-align: right;" @endif>
        <div class="container">
            <div class="content">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="accordion-side wow fadeInUp slow"
                            style="visibility: visible; animation-name: fadeInUp;">
                            <div class="accordion" id="accordionProcess">
                                <div class="accordion-item">
                                    <div class="accordion-header" id="headingOne">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne">
                                            <span class="num"> 1 / </span>
                                            <h3> {{ trans('main.who_we_are') }}</h3>
                                        </button>
                                    </div>
                                    <div id="collapseOne" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionProcess">
                                        <div class="accordion-body">
                                            <div class="text">
                                                {{ trans('main.who_we_are_description') }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseTwo" aria-expanded="false">
                                            <span class="num"> 2 / </span>
                                            <h3> {{ trans('main.our_vision') }}</h3>
                                        </button>
                                    </div>
                                    <div id="collapseTwo" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionProcess" style="">
                                        <div class="accordion-body">
                                            <div class="text">
                                                 {{ trans('main.our_vision_growth') }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseThree">
                                            <span class="num"> 3 / </span>
                                            <h3>  {{ trans('main.our_mission') }}</h3>
                                        </button>
                                    </div>
                                    <div id="collapseThree" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionProcess">
                                        <div class="accordion-body">
                                            <div class="text">
                                               {{ trans('main.our_mission_growth') }}
    
                                            </div>
                                        </div>
                                    </div>
                                </div>
                              
                            </div>
                           
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="imgs">
                            <div class="img"
                                style="translate: none; rotate: none; scale: none; transform: translate(50px, 0px); will-change: transform;">
                                <img src="{{ asset('assets/img/exp.png') }}" alt="" class="img-cover">
                            </div>
                        
                         
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <img src="{{ asset('assets') }}/img/prc_bg.png" alt="" class="bg" >
    
</section>

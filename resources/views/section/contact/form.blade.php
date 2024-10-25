<section class="tc-contact-form-style1">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-4">
                <div class="info wow fadeInUp slow" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                    <h3 class="fsz-45 fw-500 mb-80"> Let us helps build your dream! </h3>
                    <p class="fsz-14 color-666 mt-15"> Your email address will not be published. <br>
                        Required fields are marked <span class="text-danger"> * </span> </p>
                </div>
            </div>
            <div class="col-lg-6">
                <form action="{{route('contact')}}" method="POST" class="form mt-5 mt-lg-0 wow fadeInUp slow" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group mb-30">
                                <label for=""> Full name <span class="color-orange1"> * </span> </label>
                                <input name="name" type="text" class="form-control" placeholder="your name">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group mb-30">
                                <label for=""> email address <span class="color-orange1"> * </span> </label>
                                <input name="email" type="text" class="form-control" placeholder="Your email address">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group mb-30">
                                <label for=""> Phone </label>
                                <input name="phone" type="text" class="form-control" placeholder="Your phone number">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group mb-30">
                                <label for=""> Service <span class="color-orange1"> * </span> </label>
                                <select name="service_id" id="" class="form-select form-control">
                                    <option value=""> Select a service </option>
                                    @foreach ($services as $service)
                                        
                                    <option value="{{$service->id}}">{{$service->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group mb-30">
                                <label for=""> Subject <span class="color-orange1"> * </span> </label>
                                <input name="subject" type="text" class="form-control" placeholder="Subject">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group mb-30">
                                <label for=""> message <span class="color-orange1"> * </span></label>
                                <textarea  name="message" rows="6" placeholder="Write your message here" class="form-control"></textarea>
                            </div>
                        </div>
                    </div>
                    <button type="submit"  class="butn hover-bg-orange1 text-capitalize bg-white rounded-pill mt-40">
                        <span> Send Your Message <i class="fal fa-arrow-up-right ms-2"></i> </span>
                    </button>
                </form>
            </div>
        </div>

    </div>
    <img src="{{asset('assets')}}/img/contact_shap.png" alt="" class="shap">
</section>
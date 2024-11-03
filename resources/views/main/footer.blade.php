<footer class="tc-footer">
    <div class="container">
        
        <div class="foot ">
            <div class="row  justify-content-around align-items-center">
                <div class="col-lg-4 ">
                    <a href="#" class="logo">
                        <img src="{{asset('assets/img/logo-dark.png')}}" alt="">
                    </a>
                </div> 
                
                <div class="col-lg-4 mt-2">
                    <p class="copy"> © 2024  All Right Reserved </p>
                </div>
                
                <div class="col-lg-3 mt-1">
                    <div class="social-links">
                        <a href="{{$setting->twitter}}"> <i class="fab fa-x-twitter"></i> </a>
                        <a href="{{$setting->facebook}}"> <i class="fab fa-facebook-f"></i> </a>
                        <a href="{{$setting->instagram}}"> <i class="fab fa-instagram"></i> </a>
                        <a href="{{$setting->linkedin}}"> <i class="fab fa-linkedin-in"></i> </a>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <img src="{{asset('assets/img/foot_shap.svg')}}" alt="" class="shap">
</footer>
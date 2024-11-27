
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('assets/img/fav.png')}}" title="Favicon" sizes="16x16">

    <!-- bootstrap 5 -->
    @if (app()->getLocale() != 'ar')
    <link rel="stylesheet" href="{{asset('assets/css/lib/bootstrap.min.css')}}">
    @else
    <link rel="stylesheet" href="{{asset('assets/css/lib/bootstrap.rtl.min.css')}}">
    @endif

    <!-- font family -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- fontawesome icons  -->
    <link rel="stylesheet" href="{{asset('assets/css/lib/all.min.css')}}">
    <!-- line-awesome icons  -->
    <link rel="stylesheet" href="{{asset('assets/css/lib/line-awesome.css')}}">
    <!-- themify icons  -->
    <link rel="stylesheet" href="{{asset('assets/css/lib/themify-icons.css')}}">
    <!-- animate css  -->
    <link rel="stylesheet" href="{{asset('assets/css/lib/animate.css')}}">
    <!-- fancybox popup  -->
    <link rel="stylesheet" href="{{asset('assets/css/lib/jquery.fancybox.css')}}">
    <!-- lity popup  -->
    <link rel="stylesheet" href="{{asset('assets/css/lib/lity.css')}}">
    <!-- swiper slider  -->
    <link rel="stylesheet" href="{{asset('assets/css/lib/swiper8.min.css')}}">

    <!-- common style -->
    <link rel="stylesheet" href="{{asset('assets/css/common_style.css')}}">

    <!-- home style -->
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Instrument+Serif:ital@0;1&display=swap" rel="stylesheet">
      @if (app()->getLocale() == 'ar')
  <link href="https://fonts.googleapis.com/css?family=Cairo:400,700" rel="stylesheet">
  <style>
    * :not(.la):not(.ti-arrow-top-right):not(.fal):not(.fab){
          font-family: 'Cairo', sans-serif !important;
      }
     
  </style>
@endif

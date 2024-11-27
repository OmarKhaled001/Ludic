    <!--  Start navbar  -->
    <nav class="navbar navbar-expand-lg navbar-dark tc-navbar" @if(app()->getLocale() == 'ar')style="direction: rtl; text-align: right;" @endif>
        <div class="container-fluid content">
            <a class="navbar-brand " href="{{route('index')}}">
                <img src="{{asset('assets/img/logo.png')}}" alt="logo" class="logo">
            </a>
            <a class="navbar-brand-color" href="{{route('index')}}">
                <img src="{{asset('assets/img/logo-color.png')}}" alt="logo" class="logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('index')}}">{{ trans('main.home') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('about')}}">{{ trans('main.about_us') }}</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                         {{ trans('main.products') }}
                        </a>
                        <ul class="dropdown-menu">
                            @foreach ($services as $service)
                                
                            <li><a class="dropdown-item" href="{{route('service',$service->slug)}}"> {{$service->name}}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('contact')}}"> {{trans('main.contact_us')}}</a>
                    </li>
                    
                </ul>
                <ul class="navbar-nav ms-auto"> <!-- Push this to the far right -->
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <!-- Display current language flag and name -->
                <img src="{{ asset('assets/img/flags/' . LaravelLocalization::getCurrentLocale() . '.png') }}" 
                     alt="{{ LaravelLocalization::getCurrentLocaleName() }}" 
                     class="me-2" style="width: 20px; height: 15px;">
                {{ LaravelLocalization::getCurrentLocaleName() }}
            </a>
            <ul class="dropdown-menu dropdown-menu-end"> <!-- Align dropdown to the right -->
                @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                    @if ($localeCode !== LaravelLocalization::getCurrentLocale()) <!-- Exclude the current language -->
                        <li>
                            <a class="dropdown-item" hreflang="{{ $localeCode }}" 
                               href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                <img src="{{ asset('assets/img/flags/' . $localeCode . '.png') }}" 
                                     alt="{{ $properties['native'] }}" 
                                     class="me-2" style="width: 20px; height: 15px;">
                                {{ $properties['native'] }}
                            </a>
                        </li>
                    @endif
                @endforeach
            </ul>
        </li>
    </ul>
              
            </div>
        </div>
    </nav>
    <!--  End navbar  -->
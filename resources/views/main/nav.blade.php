    <!--  Start navbar  -->
    <nav class="navbar navbar-expand-lg navbar-dark tc-navbar">
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
                        <a class="nav-link" href="{{route('index')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('about')}}">About Us</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Products
                        </a>
                        <ul class="dropdown-menu">
                            @foreach ($services as $service)
                                
                            <li><a class="dropdown-item" href="{{route('service',$service->slug)}}"> {{$service->name}}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('contact')}}">Contact Us</a>
                    </li>
                </ul>
              
            </div>
        </div>
    </nav>
    <!--  End navbar  -->
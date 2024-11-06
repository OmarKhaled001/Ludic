<!DOCTYPE html>
<html lang="en">
<head>
        <!-- Metas -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="keywords" content="{{$page->keywords}}">
        <meta name="description" content="{{$page->description}}">
        <meta name="author" content="ludic">
        <!-- Title  -->
        <title>Ludic - {{$page->name}}</title>
        @include('main.meta')
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
        <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Instrument+Serif:ital@0;1&display=swap" rel="stylesheet">
    
        
</head>
<body>

    @include('main.loader')
    <div class="smooth-scroll-content" id="scrollsmoother-container">
        @include('main.nav-light')
        <main>
           
            @include('section.about.header')
            @include('section.home.clients')
            @include('section.contact.form')
            @include('section.home.mail')
            
        </main>
        
        @include('main.footer')
    </div>
  
    @include('main.scripts')
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
        <!-- Metas -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="keywords" content="{{$page->keywords}}">
        <meta name="description" content="{{$page->description}}">
        <meta name="author" content="ludic">
        <!-- Title  -->
        <title>Ludic - {{$page->name}}</title>
        @include('main.meta')
</head>
<body>
    @include('main.loader')
    <div class="smooth-scroll-content" id="scrollsmoother-container">
        @include('main.nav')
        @include('section.home.slider')
        <main>
            @include('section.home.about')
            @include('section.home.clients')
            @include('section.home.products')
            @include('section.home.mail')
            
        </main>
        
        @include('main.footer')
    </div>
    @include('main.scripts')
</body>
</html>
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
    <script>
        var map = L.map('map').setView([0, 0], 2);
    
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);
    
        var redIcon = L.icon({
            iconUrl: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-red.png',
            shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/images/marker-shadow.png',
            iconSize: [25, 41], 
            iconAnchor: [12, 41], 
            popupAnchor: [1, -34], 
            shadowSize: [41, 41]  
        });
    
        var bounds = [];
    
        @foreach($branches as $branch)
            var marker = L.marker([{{ $branch->latitude }}, {{ $branch->longitude }}], {icon: redIcon}).addTo(map);
            marker.bindPopup("<b>{{ $branch->name }}</b><br>{{ $branch->address }}");
            bounds.push([{{ $branch->latitude }}, {{ $branch->longitude }}]);
        @endforeach
    
        if (bounds.length > 0) {
            map.fitBounds(bounds);
        } else {
            map.setView([0, 0], 2);
        }
    
        $.getJSON('path/to/countries.geojson', function(data) {
            L.geoJSON(data, {
                style: function(feature) {
                    switch (feature.properties.name) {
                        case 'Egypt': return {color: "#ff0000", fillColor: "#ff9999", fillOpacity: 0.5};
                        case 'Saudi Arabia': return {color: "#00ff00", fillColor: "#99ff99", fillOpacity: 0.5};
                        case 'UAE': return {color: "#0000ff", fillColor: "#9999ff", fillOpacity: 0.5};
                        case 'Italy': return {color: "#ff00ff", fillColor: "#ff99ff", fillOpacity: 0.5};
                        default: return {color: "#333333", fillColor: "#cccccc", fillOpacity: 0.5};
                    }
                }
            }).addTo(map);
        });
    
    </script>
    
    @include('main.scripts')
</body>
</html>
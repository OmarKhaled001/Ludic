<section class="tc-map-style1 p-30 mt-20">
    <div class="container">
        <div class="row justify-content-between map-card"  data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: zoomIn;">
            <div id="map"></div>

        </div>

    </div>

</section>
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

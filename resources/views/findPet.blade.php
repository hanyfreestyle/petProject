@extends('layouts.app')


@push('scripts')




        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script>

        $(function() {



        $( document ).ready(function() {
            const x = document.getElementById("demo");

            function getLocation() {
                if (navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition(showPosition);
                } else {
                    x.innerHTML = "Geolocation is not supported by this browser.";
                }
            }

            function showPosition(position) {
                x.innerHTML = "Latitude: " + position.coords.latitude +
                    "<br>Longitude: " + position.coords.longitude;
            }
            getLocation();
        });
        });

    </script>

@endpush


@section('content')
<style>
    #mapid {
        width: 100%;
        height: 100vh;
        display: block;
        min-height: 200px;
    }
</style>

    <div id="mapid"></div>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css">
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <script>










        var mymap = L.map('mapid').setView([29.937089, 31.200219], 13);


        var myIcon = L.icon({
            iconUrl: '{{asset('assets/maps-location_16972756.png')}}', // URL to the custom icon image
            iconSize: [48, 48], // size of the icon in pixels
            iconAnchor: [22, 94], // point of the icon which will correspond to marker's location
            popupAnchor: [-3, -76] // point from which the popup should open relative to the iconAnchor
        });


        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 9,
            attribution: '© OpenStreetMap'
        }).addTo(mymap);

        L.marker([29.937089, 31.200219], { icon: myIcon })
            .bindPopup(`mylocation`)
            .addTo(mymap)
            ;

        var htmlContent;

        fetch('https://pet.test/getNearbyPlaces?lat=29.937089&lng=31.200219')
            .then(response => response.json())
            .then(data => {
                data.forEach(place => {

                    //console.log(place.location);
                    var coords = place.location;
                     htmlContent = `

    <div style="font-size:16px;">
        <strong>${place.name}</strong><br>
        <img src="https://pet.test/images/fav/logo.png" alt="Image description" style="width:220px;"><br>
        <p>${place.description}</p>
        <a href="${place.url}" target="_blank">More Info</a>
    </div>
`;


                    //alert(coords.lat);

                    L.marker([coords.lat, coords.lng])
                        .addTo(mymap)
                        .bindPopup(htmlContent);
                });
            });
    </script>

@endsection


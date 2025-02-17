@extends('layouts.app')


@push('scripts')

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        $(function () {

            intId.style.opacity = 1;


            function show_alert(message, type = 'toast-success', showConfirmButton = false, postaion = 'top-end') {

                /*let box =  Swal.fire({
                     title: "The Internet?",
                     text: "That thing is still around?",
                     icon: "question"
                 });*/


                $('.alert-pop').fadeIn();
                $('.alert-toast').addClass(type);
                $('.alert-pop-message').html(message);


            }

            const x = document.getElementById("demo");

            function getLocation() {
                if (navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition(showPosition, handleError);
                } else {
                    show_alert("Geolocation is not supported by this browser.", 'toast-danger');
                    //x.innerHTML = "Geolocation is not supported by this browser.";
                }
            }

            function showPosition(position) {
                /*x.innerHTML = "Latitude: " + position.coords.latitude +
                    "<br>Longitude: " + position.coords.longitude;*/
            }

            function handleError(error) {
                switch (error.code) {
                    case error.PERMISSION_DENIED:
                        //x.innerHTML = "User denied the request for Geolocation.";
                        show_alert("User denied the request for Geolocation.", 'toast-warning')
                        navigator.geolocation.getCurrentPosition(showPosition, handleError);
                        break;
                    case error.POSITION_UNAVAILABLE:
                        // x.innerHTML = "Location information is unavailable.";
                        show_alert("Location information is unavailable.", 'toast-danger')
                        break;
                    case error.TIMEOUT:
                        show_alert("The request to get user location timed out.", 'toast-danger');
                        break;
                    case error.UNKNOWN_ERROR:
                        // x.innerHTML = "An unknown error occurred.";
                        show_alert("An unknown error occurred..", 'toast-danger');
                        break;
                }
            }

            getLocation();


        });
    </script>

@endpush


@section('content')
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css">
    <style>
        #mapid {
            width: 100%;
            height: 100vh;
            display: block;
            min-height: 200px;
        }

        .leaflet-popup-content-wrapper, .leaflet-popup-tip {
            background: #09011e;
        }
    </style>



    <div class="container alert-pop" style="display: none; position: absolute; top: 50px;  z-index: 9999999999">
        <div class="alert-toast toast custom-toast-1   mb-2 fade show" role="alert" aria-live="assertive"
             aria-atomic="true" data-bs-delay="5000" data-bs-autohide="false">
            <div class="toast-body">
                <i class="bi bi-info-circle text-white h1 mb-0"></i>
                <div class="toast-text ms-3 me-2">
                    <p class="mb-0 text-white alert-pop-message">....</p>

                </div>
            </div>

            <button class="btn btn-close btn-close-white position-absolute p-1" type="button" data-bs-dismiss="toast"
                    aria-label="Close"></button>
        </div>
    </div>


    <div id="mapid"></div>

    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <script>


        let lat = '30.0435575';
        let long = '30.9839';
        let zoom = 14;


        let mymap = L.map('mapid').setView([lat, long], zoom);


        let myIcon = L.icon({
            iconUrl: '{{asset('assets/maps-location_16972756.png')}}', // URL to the custom icon image
            iconSize: [48, 48], // size of the icon in pixels
            iconAnchor: [22, 94], // point of the icon which will correspond to marker's location
            popupAnchor: [-3, -76] // point from which the popup should open relative to the iconAnchor
        });


        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 16,
            attribution: '© OpenStreetMap'
        }).addTo(mymap);

        L.marker([lat, long], {icon: myIcon})
            .bindPopup(`mylocation`)
            .addTo(mymap)
        ;

        let htmlContent;
        let logoBase = "{{asset('storage')}}/";

        fetch('{{route('web.getNearbyPlaces')}}' + '?lat=' + lat + '&lng=' + long)
            .then(response => response.json())
            .then(data => {
                data.forEach(place => {
                    let phoneListDiv = document.getElementById("phoneList");
                    //console.log(place.location);
                    var coords = place.location;
                    let phoneLinks = "";


                    place.phone_number.slice(0, 6).forEach(phone => {
                        phoneLinks += `
                        <a href="tel:${phone.number.replace(/\s/g, '')}"  target="_blank" >
                        <i style="color: #ffffff; font-size: 24px" class="fa-solid  fa-square-phone"></i>
                        `;
                        //phoneLinks += `<a href="tel:${phone.number.replace(/\s/g, '')}" style="display: block;">${phone.number}</a>`;
                    });

                    htmlContent = `

    <div style="font-size:16px; text-align: center">
       <p> <H3 style="color: #fff3cd">${place.name}</H3></p>
        <img src="${logoBase}${place.logo}" alt="Image description" style="height:96px;"><br>
        <p style="text-align: start; color: #ffffff">${place.services}</p>


<div class="social-info-wrap">
${phoneLinks}
                                    <a href="${place.website}"  target="_blank">
                        <i style="color: #ffffff; font-size: 24px" class="fa-solid fa-globe"></i>
                    </a>

                    </a>

                    </a>

            </div>



<a class="affan-element-item"  target="_blank" href="https://www.google.com/maps/dir/?api=1&destination=${place.location.lat},${place.location.lng}">
<i style="margin-right: 10px" class="fa-solid fa-map-location-dot"></i>Get Direction
        <i class="bi bi-arrow-right"></i>
</a>

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


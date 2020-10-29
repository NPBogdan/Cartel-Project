<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>The Cartel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!--Script-ul axios -->
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <!--Script-ul cu functia Geocode si Autocomplete -->
    <script defer>
        function initMap() {
            const map = new google.maps.Map(document.getElementById("map"), {
                zoom: 8,
                center: {lat: 44.4267674, lng: 26.1025384}
            });

            var locationAddress = document.getElementById('locationForm');
            locationAddress.addEventListener('submit', geocode);

            function geocode(e) {
                //Previne trimiterea form-ului
                e.preventDefault();
                var location = document.getElementById('locationName').value;
                axios.get("https://maps.googleapis.com/maps/api/geocode/json", {
                    params: {
                        address: location,
                        key: 'AIzaSyBB0Tj2YoWLm7ozC9I9P_zkESQeRmCKDXw'
                    }
                }).then(function (response) {
                    //Afisam tot raspunsul primit in consola
                    console.log(response);
                    //Locatia
                    var lat = response.data.results[0].geometry.location.lat;
                    var lng = response.data.results[0].geometry.location.lng;

                    var afisareaLatLng = `
            <ul>
                <li>${lat}</li>
                <li>${lng}</li>
            </ul>
            `;
                    //Adresa formatata
                    var adresaFormatata = response.data.results[0].formatted_address;
                    var afisareadresaFormatata = `
            <ul>
                <li> ${adresaFormatata}</li>
            </ul>
            `;
                    //Afisam pe ecran
                    document.getElementById('adresaFormatata').innerHTML = afisareadresaFormatata;
                    document.getElementById('position').innerHTML = afisareaLatLng;

                    //Centram harta acolo unde a bagat utilizatorul
                    map.setCenter({
                        lat: response.data.results[0].geometry.location.lat,
                        lng: response.data.results[0].geometry.location.lng
                    });

                    // The marker
                    const marker = new google.maps.Marker({
                        position: {
                            lat: response.data.results[0].geometry.location.lat,
                            lng: response.data.results[0].geometry.location.lng
                        },
                        map: map,
                    });
                }).catch(function (error) {
                    console.log(error);
                });
            }

            initAutocomplete();
        }

        function initAutocomplete() {
            new google.maps.places.Autocomplete(
                document.getElementById('locationName'));
        }
    </script>
    <!--Script-ul Google API -->
    <script
        type="text/javascript"
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBB0Tj2YoWLm7ozC9I9P_zkESQeRmCKDXw&callback=initMap&libraries=places&v=weekly"
        defer
    ></script>

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <style type="text/css">
        body {
            font-family: 'Nunito';
        }
        /* Set the size of the div element that contains the map */
        #map {
            height: 400px;
            /* The height is 400 pixels */
            width: 100%;
            /* The width is the width of the web page */
        }
    </style>
</head>

<body>
<h3>Googe Maps</h3>
<!--The div element for the map -->
<div id="map"></div>
<!--Form-ul de cautare a adresei -->
<form id="locationForm">
    <input type="text" id="locationName">
    <input type="submit">
</form>
<!--Cateva date din response -->
<div id="adresaFormatata"></div>
<div id="position"></div>

<!--Form-ul pentru logare si register -->
<div class="container text-center">
    <form method="post" action="/login">
        {{ csrf_field() }}
        <label for="email">Email</label>
        <input type="email" class="text-primary" name="email">
        <br>
        <label for="password">Parola</label>
        <input type="password" class="text-primary" name="password">
        <input type="submit" value="Log In">
    </form>

    <a href="/user/register">Creeaza cont!</a>
</div>

</body>
</html>

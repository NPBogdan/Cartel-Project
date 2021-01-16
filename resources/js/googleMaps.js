function initAutocomplete() {
    new google.maps.places.Autocomplete(
        document.getElementById("locationName"));
}

function initMap() {
    const map = new google.maps.Map(document.getElementById("map"), {
        zoom: 8,
        center: {lat: 44.4267674, lng: 26.1025384}
    });
    var locationAddress = document.getElementById('locationForm');
    locationAddress.addEventListener('submit', geocode);
    function geocode(e) {
        //Prevent form from sent
        e.preventDefault();
        var location = document.getElementById('locationName').value;
        axios.get("https://maps.googleapis.com/maps/api/geocode/json", {
            params: {
                address: location,
                key: 'AIzaSyBB0Tj2YoWLm7ozC9I9P_zkESQeRmCKDXw'
            }
        }).then(function (response) {
            //Display entire response
            console.log(response);
            //Location
            var lat = response.data.results[0].geometry.location.lat;
            var lng = response.data.results[0].geometry.location.lng;
            var afisareaLatLng = `
            <ul>
                <li>${lat}</li>
                <li>${lng}</li>
            </ul>
            `;
            //Formated address
            var formatedAddressField = response.data.results[0].formatted_address;
            var displayFormatedAddress = `
                <p>${formatedAddressField}</p>
            `;

            //Display on the screen
            document.getElementById('city').value = location;
            document.getElementById('formatedAddress').innerHTML = displayFormatedAddress;
            document.getElementById('position').innerHTML = afisareaLatLng;
            //Center the map where the user put it
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

window.onload = function() {
    initMap();
};

var map;
var SampleResult = "SampleResultsPage.php";

function initMap() {
    /*var myLatLng = { lat: $lat, lng: $lng };

    map = new google.maps.Map(document.getElementById('map'), {
        zoom: 14,
        center: myLatLng
    });*/
}

function initMap(latitude, longitude) {
    var myLatLng = { lat: latitude, lng: longitude };

    map = new google.maps.Map(document.getElementById('map'), {
        zoom: 14,
        center: myLatLng
    });
}

function addMarker(title, latitude, longitude) {
    var myLatLng = { lat: latitude, lng: longitude };
    var marker = new google.maps.Marker({
        position: myLatLng,
        map: map,
        title: title
    });
}
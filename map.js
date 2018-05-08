var map;
var SampleResult = "SampleResultsPage.php";

function initMap() {
    var myLatLng = { lat: -27.4775, lng: 153.0285 };

    map = new google.maps.Map(document.getElementById('map'), {
        zoom: 14,
        center: myLatLng
    });

    addMarker('First item in the DB', myLatLng);
}

function addMarker(title, myLatLng) {
    var marker = new google.maps.Marker({
        position: myLatLng,
        map: map,
        title: title
    });
}
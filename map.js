var map;

function initMap() {
    var myLatLng = { lat: -27.4775, lng: 153.0285 };
    map = new google.maps.Map(document.getElementById('map'), {
        zoom: 11,
        center: myLatLng
    });
}

function addMarker(markName, markLat, markLng) {
    var myLatLng = { lat: markLat, lng: markLng };
    var marker = new google.maps.Marker({
        position: myLatLng,
        animation: google.maps.Animation.DROP,
        map: map,
        title: markName
    });
}
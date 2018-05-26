<?php
$pdo = new PDO('mysql:host=localhost;dbname=cab230_db', 'root', 'Secret!');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

function oneMarker($stmt) {
    $initialised = false;
    foreach ($stmt as $marker) {
        $name = $marker['name'];
        $lat = $marker['latitude'];
        $lng = $marker['longitude'];
        if ($initialised) {
            echo "<script>addMarker($name, $lat, $lng);</script>";
        } else {
            echo "<script>initMap($lat, $lng);</script>";
            $initialised = true;
        }
    }
}

function allMarkers() {
    $stmt = $pdo->query('SELECT name, latitude, longitude FROM hotspots;');
    oneMarker($stmt);
}
?>

<div id="map">
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDKlKV9TS-T99AmtHi_h2XXcx2bZ82MRUc&callback=initMap"></script>
</div>
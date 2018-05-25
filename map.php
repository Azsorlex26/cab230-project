<div id="map">
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDKlKV9TS-T99AmtHi_h2XXcx2bZ82MRUc&callback=initMap"></script>
</div>

<?php
function execute($stmt) {
    $stmt->execute();
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
    $stmt = $pdo->prepare('SELECT name, latitude, longitude FROM hotspots;');
    execute($stmt);
}

function oneMarker($latitude, $longitude) {
    $stmt = $pdo->prepare('SELECT name, latitude, longitude FROM hotspots '.
                          'WHERE latitude = :lat AND longitude = :long;');
    $stmt->bindValue(':lat', $latitude);
    $stmt->bindValue(':long', $longitude);
    execute($stmt);
}

$pdo = new PDO('mysql:host=localhost;dbname=cab230_db', 'root', 'Secret!');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>
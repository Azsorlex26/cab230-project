<script src="map.js"></script>
<div id="map"></div>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDKlKV9TS-T99AmtHi_h2XXcx2bZ82MRUc&callback=initMap"></script>

<?php
function allMarkers() {
    addMarkers('SELECT name, latitude, longitude FROM hotspots;', false, "");
}

function oneMarker($name) {
    addMarkers('SELECT name, latitude, longitude FROM hotspots '.
               'WHERE name = :name;', true, $name);
}

function addMarkers($query, $prepare, $name) {
    $pdo = new PDO('mysql:host=localhost;dbname=cab230_db', 'root', 'Secret!');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    if ($prepare) {
        $stmt = $pdo->prepare($query);
        $stmt->bindValue(':name', $name);
        $stmt->execute();
    } else {
        $stmt = $pdo->query($query);
    }
    foreach ($stmt as $marker) {
        ?>
        <script>
            var name = "<?php echo $marker['name'] ?>";
            var lat = <?php echo $marker['latitude'] ?>;
            var lng = <?php echo $marker['longitude'] ?>;
            addMarker(name, lat, lng);
        </script>
        <?php
    }
}
?>
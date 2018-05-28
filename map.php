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
    ?>
    <script>var data = new Array();</script>
    <?php
    $count = 0;
    foreach ($stmt as $marker) {
        ?>
        <script>
            var count = <?php echo $count ?>;
            var name = "<?php echo $marker['name'] ?>";
            var lat = <?php echo $marker['latitude'] ?>;
            var lng = <?php echo $marker['longitude'] ?>;
            data[count] = new Array(name, lat, lng);
        </script>
        <?php
        $count++;
    }
}
?>

<script src="map.js"></script>
<div id="map"></div>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDKlKV9TS-T99AmtHi_h2XXcx2bZ82MRUc&callback=initMap"></script>
<script>
    for (var i = 0; i < data.length; i++) {
        addMarker(data[i][0], data[i][1], data[i][2]);
    }
</script>
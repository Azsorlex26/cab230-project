<?php
function addMarkers($name) {
    $pdo = new PDO('mysql:host=localhost;dbname=cab230_db', 'root', 'Secret!');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $pdo->prepare('SELECT name, latitude, longitude FROM hotspots '.
                          'WHERE LOWER(name) LIKE :name;');
    $lowerCase = strtolower($name);
    $stmt->bindValue(':name', "%$lowerCase%");
    $stmt->execute();

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
    var data = new Array();
    setTimeout(
        function(){
            for (var i = 0; i < data.length; i++) {
                addMarker(data[i][0], data[i][1], data[i][2]);
            }
        },
        1000
    );
</script>

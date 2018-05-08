<div id="map">
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDKlKV9TS-T99AmtHi_h2XXcx2bZ82MRUc&callback=initMap"></script>
</div>'

<?php
$pdo = new PDO('mysql:host=localhost;dbname=test', 'admin', 'secret!');
$stmt = $pdo->prepare('SELECT * FROM Customers WHERE firstname = :firstname');
$stmt->bindValue(':firstname', $_GET['firstname']);
$stmt->execute();
/*
foreach ($stmt as $marker) {
    addMarker($marker.title, $marker.LatLng);
}
*/
?>
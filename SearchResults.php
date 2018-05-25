<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles.css">
    <script src="map.js"></script>
    <title>Search Results</title>
    <!-- The title will carry over from the search string of the previous page (hopefully) -->
</head>

<body>
    <?php
    function result($title, $description) {
        echo '<div class="result" name="result" onclick="window.location=SampleResult;">'; #Still require a javascript variable to link pages. idk why.
        echo "<h3>$title</h3>";
        echo "<p>$description</p></div>";
    }
    
    include 'navBar.php';

    //How to access data from the DB
    $pdo = new PDO('mysql:host=localhost;dbname=cab230_db', 'root', 'Secret!');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $q1 = $pdo->query('SELECT name FROM hotspots;');
    
    echo '<div class="result_block">';
    
    foreach ($q1 as $hotspot) {
        $q2 = $pdo->prepare('SELECT description '.
                            'FROM reviews '.
                            'WHERE name = :name '.
                            'ORDER BY id DESC '.
                            'LIMIT 1;');
        $q2->bindValue(':name', $hotspot['name']);
        $q2->execute();
        if ($q2->rowCount() > 0) {
            foreach ($q2 as $description) {
                result($hotspot['name'], ($description['description']));
            }
        } else {
            result($hotspot['name'], "No reviews yet!");
        }
    }
    /*
    result("Brisbane Square Library Wifi", "This is a really useful hotspot to have because...");
    result("City Botanic Gardens Wifi", "This is really, really convenient to have because...");
    result("Hamilton Library Wifi", "I can use this hotspot to check my emails and other...");
    */
    echo '</div></form>';

    include 'map.php';
    include 'relativefooter.php';
    ?>
</body>

</html>
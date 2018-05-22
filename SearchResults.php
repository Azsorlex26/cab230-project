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
        echo '<div class="result" onclick="window.location=SampleResult;">'; #Still require a javascript variable to link pages. idk why.
        echo "<h3>$title</h3>";
        echo "<p>$description</p></div>";
    }
    
    include 'navBar.php';

    //How to access data from the DB
    $pdo = new PDO('mysql:host=localhost;dbname=cab230_db', 'admin', 'secret!');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    try {
        $stmt = $pdo->query('SELECT h.title, r.description' .
                            'FROM hotspots h, reviews r;');
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

    echo '<div class="result_block">';
    
    foreach ($stmt as $hotspot) {
        result($hotspot['h.title'], ($hotspot['r.description'] . '...'));
    }
    /*
    result("Brisbane Square Library Wifi", "This is a really useful hotspot to have because...");
    result("City Botanic Gardens Wifi", "This is really, really convenient to have because...");
    result("Hamilton Library Wifi", "I can use this hotspot to check my emails and other...");
    */
    echo '</div>';

    include 'map.php';
    include 'relativefooter.php';
    ?>
</body>

</html>
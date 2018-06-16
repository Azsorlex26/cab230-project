<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles.css">
    <title>Search Results</title>
    <!-- The title will carry over from the search string of the previous page (hopefully) -->
</head>

<body>
    <?php
    function result($title, $description) {
        if ($description != null) {
            echo '<a href="SampleResultsPage.php?title=' . $title .'" class="result">';
            echo "<div><h3>$title</h3>";
            echo "<p>$description</p></div></a>";
        } else {
            echo '<div class="result"><h3>'.$title.'</h3></div>';
        }
    }

    include 'navBar.php';

    $name = $_POST["search"];

    //How to access data from the DB
    $pdo = new PDO('mysql:host=localhost;dbname=cab230_db', 'root', 'Secret!');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $q1 = $pdo->prepare('SELECT name FROM hotspots '.
                        'WHERE LOWER(name) LIKE :name;');
    $lowerCase = strtolower($name);
    $q1->bindValue(':name', "%$lowerCase%");
    $q1->execute();

    echo '<div class="result_block">';
    if ($q1->rowCount() > 0) {
        foreach ($q1 as $hotspot) {
            $q2 = $pdo->prepare('SELECT description '.
                                'FROM reviews '.
                                'WHERE name = :name '.
                                'ORDER BY reviewID DESC '.
                                'LIMIT 1;');
            $q2->bindValue(':name', $hotspot['name']);
            $q2->execute();
            if ($q2->rowCount() > 0) {
                foreach ($q2 as $description) {
                    result($hotspot['name'], (substr($description['description'], 0, 186).'...'));
                }
            } else {
                result($hotspot['name'], "No reviews yet!");
            }
        }
    } else {
        result("No matching results", null);
    }
    echo '</div>';

    include 'map.php';
    addMarkers($name);

    if ($q1->rowCount() >= 4) {
        include 'relativefooter.php';
    } else {
        include 'fixedfooter.php';
    }
    ?>
</body>

</html>

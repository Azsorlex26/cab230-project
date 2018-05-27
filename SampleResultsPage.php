<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles.css">
    <script src="map.js"></script>
    <title>Sample Results</title>
    <!-- The title will carry over from the search string of the previous page (hopefully) -->
</head>

<body>
    <?php
    function review($title, $user, $review) {
        if ($title != "No reviews yet") {
            echo '<div class="review">';
            echo "<h3>$title</h3>";
            echo "<h6>By $user</h6>";
            echo "<p>$review</p></div>";
        } else {
            echo '<a class="review" href="writeReview.php?name='.$_GET['title'].'"><div>';
            echo "<h3>$title</h3>";
            echo "<p>$review</p></div></a>";
        }
    }

    include 'navBar.php';

    $name = $_GET['title'];

    //Accessing data from DB
    $pdo = new PDO('mysql:host=localhost;dbname=cab230_db', 'root', 'Secret!');
    $stmt = $pdo->prepare('SELECT title, username, description FROM reviews '.
                          'WHERE name = :name;');
    $stmt->bindValue(':name', $_GET['title']);
    $stmt->execute();

    echo '<div class="center_block">';
    echo "<h1>$name</h1>";
    echo '<a href="writeReview.php?name='.$_GET['title'].'">Write a review for this hotspot!</a>';
    if ($stmt->rowCount() > 0) {
        foreach ($stmt as $review) {
            review($review['title'], $review['username'], $review['description']);
        }
    } else {
        review("No reviews yet", "", "Click here to be the first!");
    }
    echo '</div>';

    include 'map.php';
    oneMarker($name);

    if ($stmt->rowCount() > 5) {
        include 'relativefooter.php';
    } else {
        include 'fixedfooter.php';
    }
    ?>
</body>

</html>
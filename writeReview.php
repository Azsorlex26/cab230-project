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
    function inputFeild($name, $title, $type) {
        echo "<label for=$name>";
        echo "<b>$title</b>";
        echo '</label><br>';
        echo "<input type=$type name=$name required id=$name><br><br>";
    }

    include 'navBar.php';
    if (isset($_SESSION['user'])) {
        $name = $_GET['name'];
        echo '<div class="review_block">';
        echo "<h1>Writing review for: $name</h1>";
        echo '<form method="POST" action="writeReview.php?name='.$name.'">';
            ?>
            <label for="title">
                <b>Review title:</b>
            </label><br>
            <?php
            if (isset($_POST['review'])) {
                echo '<input type="text" name="title" required id="title" value="'.$_POST['title'].'"><br><br>';
            } else {
                echo '<input type="text" name="title" required id="title"><br><br>';
            }
            ?>

            <label for="review">
                <b>Review description:</b>
            </label><br>
            <?php
            if (isset($_POST['review'])) {
                echo '<textarea class="review_area" name="review" rows="10" required>'.$_POST['review'].'</textarea>';
            } else {
                echo '<textarea class="review_area" name="review" rows="10" required></textarea>';
            }
            ?>
            <button type="submit" class="submitButton" name="createreview">Create Review</button>
        </form>
        </div>
        <?php
        if (isset($_POST['title']) && isset($_POST['review'])) {
            $pdo = new PDO('mysql:host=localhost;dbname=cab230_db', 'root', 'Secret!');
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $q1 = $pdo->prepare('INSERT INTO reviews(title, description, username, name) '.
                                'VALUES('.
                                    ':title,'.
                                    ':review,'.
                                    ':username,'.
                                    ':name);');
            $q1->bindValue(':title', $_POST['title']);
            $q1->bindValue(':review', $_POST['review']);
            $q1->bindValue(':username', $_SESSION['user']);
            $q1->bindValue(':name', $_GET['name']);
            try {
                $q1->execute();
                header('Location:  http://localhost/applications/cab230-project/SampleResultsPage.php?title='.$_GET['name']);
            } catch (PDOException $e) {
                echo '<script>alert("The review title or description is too long.");</script>';
            }
        }
    } else {
        header('Location:  http://localhost/applications/cab230-project/signin.php');
    }
    include 'fixedfooter.php';
    ?>
</body>

</html>

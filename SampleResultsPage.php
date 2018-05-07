<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles.css">
    <script src="Javascript.js"></script>
    <title>Sample Results</title>
    <!-- The title will carry over from the search string of the previous page (hopefully) -->
</head>

<body>
    <?php
    function review($title, $review) {
        echo '<div class="review">';
        echo "<h3>$title</h3>";
        echo "<p>$review</p></div>";
    }

    include 'navBar.php';

    echo '<div class="center_block">'; #Another one of those sections where the title is based on the database
    echo '<h1>*dynamic title*</h1>';
    review("Handy wifi point", "This is a really useful hotspot to have because I can use my phone to search up details and facts about books both without eating into my own data and moving to one of the library computers. Really useful to have.");
    review("Convenient", "*you get the idea*");
    review("Really, really slow!", "*you get the idea*");
    echo '</div>';

    include 'map.php';
    include 'footer.php';
    ?>
</body>

</html>
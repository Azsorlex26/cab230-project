<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles.css">
    <title>Search Page</title>
</head>

<body>
    <?php include 'navBar.php'; ?>

    <form method="POST" action="SearchResults.php">
        <div class="searchContainer">
            <input type="text" name="search" placeholder="search here...">
            <input name="searchButton" type="submit" value="Search" />
        </div>
    </form>

    <?php include 'fixedfooter.php'; ?>
</body>

</html>
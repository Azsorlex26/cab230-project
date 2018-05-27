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
            <input type="text" name="search" class="search" placeholder="search here...">
        </div>

        <!--search based on suburb(drop down menu)-->
        <div class="suburbs">
            <button class="suburbButton">Choose A Suburb</button>
            <div class="dropdownSuburbs">
                <a href="SearchResults.php">Suburb 1</a>
                <a href="SearchResults.php">Suburb 2</a>
                <a href="SearchResults.php">Suburb 3</a>
                <a href="SearchResults.php">Suburb 4</a>
                <a href="SearchResults.php">etc...</a>
            </div>
        </div>

        <!--a rating-->
        <div class="ratings">
            <button class="ratingButton">Choose A Rating</button>
            <div class="dropdownRatings">
                <a href="SearchResults.php">One Star</a>
                <a href="SearchResults.php">Two Stars</a>
                <a href="SearchResults.php">Three Stars</a>
                <a href="SearchResults.php">Four Stars</a>
                <a href="SearchResults.php">Five Stars</a>
            </div>
        </div>

        <!--geolocation-->

        <input class="geoButton" type="submit" value="Search Location" />
    </form>

    <?php include 'fixedfooter.php'; ?>
</body>

</html>
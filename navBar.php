<div class="header">
    <ul class="navBar">
        <?php
        function createItem($class, $page, $text) {
            echo "<li><a class=$class href=$page>$text</a></li>";
        }
        createItem("left", "search.php", "Search Page");
        createItem("right", "signup.php", "Sign Up");
        session_start();
        if (isset($_SESSION['user'])) {
            $name = $_SESSION['user'];
            createItem("right", "signout.php", "Sign Out");
            echo '<li><a class=right>Signed in as: '.$name.'</li>';
        } else {
            createItem("right", "signin.php", "Sign In");
        }
        ?>
    </ul>
</div>
<div class="header">
    <ul class="navBar">
        <?php
        function createItem($class, $page, $text) {
            echo "<li><a class=$class href=$page>$text</a></li>";
        }
        createItem("left", "search.php", "Search Page");
        createItem("right", "signup.php", "Sign Up");
        createItem("right", "signin.php", "Sign In");
        ?>
    </ul>
</div>
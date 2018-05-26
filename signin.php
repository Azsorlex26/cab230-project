<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="styles.css">
    <title>User Registration</title>
    <meta charset="UTF-8">
</head>

<body>
    <?php
    function inputFeild($name, $title, $type, $placeholder) {
        echo "<label for=$name>";
        echo "<b>$title</b>";
        echo '</label><br>';
        echo "<input type=$type placeholder=$placeholder name=$name required id=$name><br><br>";
    }

    include 'navBar.php';

    ?>
    <form method="POST" action="signin.php">
        <div class="containerLogin">
            <h1>Log In</h1><hr><br>
    <?php
    inputFeild("username", "Username", "text", "Please enter your Username");
    inputFeild("psw", "Password", "password", "Please enter your Password");
    inputFeild("psw-repeat", "Re-enter Password", "password", "Please re-enter your Password");
    ?>
    <br><br>
    <button type="submit" class="signUpButton" name="signin">Log In</button>
    </div>
    </form>
    <?php

    include 'fixedfooter.php';
    ?>
</body>

</html>
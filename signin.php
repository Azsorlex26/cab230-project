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

    echo '<form><div class="containerLogin"><h1>Log In</h1><hr><br>';
    inputFeild("username", "Username", "text", "Please enter your Username");
    inputFeild("psw", "Password", "password", "Please enter your Password");
    inputFeild("psw-repeat", "Re-enter Password", "password", "Please re-enter your Password");
    echo '<br><br><button type="submit" class="signUpButton">Log In</button></div></form>';

    include 'fixedfooter.php';
    ?>
</body>

</html>
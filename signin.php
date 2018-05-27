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
    ?>
    <br><br>
    <button type="submit" class="signUpButton" name="signin">Log In</button>
    </div>
    </form>

    <?php
    if (isset($_POST['username']) && isset($_POST['psw'])) {
        $db = new PDO('mysql:host=localhost;dbname=cab230_db', 'root', 'Secret!');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $query = $db->prepare('SELECT * '.
                              'FROM users '.
                              'WHERE username = :username '.
                              'AND password = SHA2(CONCAT(:password, salt), 0);');
        $query->bindValue(':username', $_POST['username']);
        $query->bindValue(':password', $_POST['psw']);
        $query->execute();
        if ($query->rowCount() > 0) {
            session_start();
            $_SESSION['user'] = $_POST['username'];
            header('Location:  http://localhost/applications/cab230-project/search.php');
            exit();
        } else {
            echo '<script>alert("Incorrect username or password.");</script>';
        }
        $_POST = array(); //This doesn't work for some reason.
    }
    include 'fixedfooter.php';
    ?>
</body>

</html>
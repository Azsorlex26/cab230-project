<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="styles.css">
    <title>User Registration</title>
    <meta charset="UTF-8">
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

    ?>
    <form method="POST" action="signin.php">
        <div class="containerLogin">
            <h1>Log In</h1><hr><br>
    <?php
    inputFeild("username", "Username", "text");
    inputFeild("psw", "Password", "password");
    ?>
    <br><br>
    <button type="submit" class="submitButton" name="signin">Log In</button>
    </div>
    </form>

    <?php
    if (isset($_POST['username']) && isset($_POST['psw'])) {
        $pdo = new PDO('mysql:host=localhost;dbname=cab230_db', 'root', 'Secret!');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $query = $pdo->prepare('SELECT * '.
                              'FROM users '.
                              'WHERE username = :username '.
                              'AND password = SHA2(CONCAT(:password, salt), 0);');
        $query->bindValue(':username', $_POST['username']);
        $query->bindValue(':password', $_POST['psw']);
        $query->execute();
        if ($query->rowCount() > 0) {
            session_start();
            $_SESSION['user'] = $_POST['username'];
            header('Location:  http://localhost/applications/cab230-project/index.php');
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
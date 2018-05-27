<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="styles.css">
    <title>User Registration</title>
    <meta charset="UTF-8">
</head>

<body>

    <?php 
    function inputField($name, $title, $type, $state) {
        echo "<label for=$name>";
        echo "<b>$title</b>";
        echo '</label><br>';
        if (!$state) {
            echo "<input type=$type name=$name required id=$name><br><br>";
        } else {
            echo '<select id="state" name='.$name.' required id="state">';
                ?>
                <option value="Queensland">Queensland</option>
                <option value="NSW">NSW</option>
                <option value="Victoria">Victoria</option>
                <option value="ACT">ACT</option>
                <option value="Tasmania">Tasmania</option>
                <option value="South Australia">South Australia</option>
                <option value="Northern Territory">Northern Territory</option>
                <option value="Western Australia">Western Australia</option>
            </select>
            <br>
            <br>
            <?php
        }
    }
    
    include 'navBar.php';

    ?>
    <form method="POST" action="signup.php">
        <div class="containerLogin">
        <h1>User Registration</h1><hr><br>
    <?php
    
    inputField("fName", "First Name", "text", false);
    inputField("lName", "Last Name", "text", false);
    inputField("username", "Username", "text", false);
    inputField("email", "email", "text", false);
    inputField("state", "State", "", true);
    inputField("postCode", "Postcode", "text", false);
    inputField("psw", "Password", "password", false);
    inputField("psw-repeat", "Re-enter Password", "password", false);
    
    ?>
    <button type="submit" class="submitButton" name="signup">Sign Up</button>
    </div>
    </form>
    <?php

    if (isset($_POST['fName']) && isset($_POST['lName']) &&
        isset($_POST['username']) && isset($_POST['email']) &&
        isset($_POST['state']) && isset($_POST['postCode']) &&
        isset($_POST['psw']) && isset($_POST['psw-repeat'])) {

            if ($_POST['psw'] == $_POST['psw-repeat']) {
                $pdo = new PDO('mysql:host=localhost;dbname=cab230_db', 'root', 'Secret!');
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $q1 = $pdo->prepare('INSERT INTO users VALUES('.
                                    ':username,'.
                                    'SHA2(:username, 0),'.
                                    'SHA2(CONCAT(:password, SHA2(:username, 0)), 0),'.
                                    ':fName,'.
                                    ':lName,'.
                                    ':email,'.
                                    ':state,'.
                                    ':postCode);');
                $q1->bindValue(':username', $_POST['username']);
                $q1->bindValue(':password', $_POST['psw']);
                $q1->bindValue(':fName', $_POST['fName']);
                $q1->bindValue(':lName', $_POST['lName']);
                $q1->bindValue(':email', $_POST['email']);
                $q1->bindValue(':state', $_POST['state']);
                $q1->bindValue(':postCode', $_POST['postCode']);
                try {
                    $q1->execute();                   
                    echo '<script>alert("Account created successfully.")</script>';
                } catch (PDOException $e) {
                    if (strpos($_POST['email'], '@') && strpos($_POST['email'], '.')) {
                        echo '<script>alert("Something went wrong. Either the username is already taken, or the postcode was invalid.")</script>';
                    } else {
                        echo '<script>alert("Email was invalid.");</script>';
                    }
                }
            } else {
                echo '<script>alert("Password feilds do not match.")</script>';
            }
            $_POST = array(); //This doesn't work for some reason.
    }
    include 'fixedfooter.php';
    ?>
</body>

</html>
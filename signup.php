<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="styles.css">
    <title>User Registration</title>
    <meta charset="UTF-8">
</head>

<body>

    <?php 
    function inputField($name, $title, $type, $placeholder, $state) {
        echo "<label for=$name>";
        echo "<b>$title</b>";
        echo '</label><br>';
        if ($state) {
            ?>
            <select id="state" required id="state">
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
        } else {
            echo "<input type=$type placeholder=$placeholder name=$name required id=$name><br><br>";
        }
    }
    
    include 'navBar.php';

    ?>
    <form method="POST" action="signup.php">
        <div class="containerLogin">
        <h1>User Registration</h1><hr><br>
    <?php
    inputField("fName", "First Name", "text", "Please enter your first name", false);
    inputField("lName", "Last Name", "text", "Please enter your last name", false);
    inputField("username", "Username", "text", "Please enter your Username", false);
    inputField("email", "email", "text", "Please enter your email", false);
    inputField("state", "State", "", "", true);

    inputField("postCode", "Postcode", "text", "Please enter your postcode", false);
    inputField("psw", "Password", "password", "Please enter your Password", false);
    inputField("psw-repeat", "Re-enter Password", "password", "Please re-enter your Password", false);
    echo '</div></form>';

    

    include 'fixedfooter.php';
    ?>
</body>

</html>
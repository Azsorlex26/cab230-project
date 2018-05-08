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

    echo '<form><div class="containerLogin"><h1>User Registration</h1><hr><br>';
    inputFeild("fName", "First Name", "text", "Please enter your first name");
    inputFeild("lName", "Last Name", "text", "Please enter your last name");
    inputFeild("username", "Username", "text", "Please enter your Username");
    inputFeild("email", "email", "text", "Please enter your email");

    echo '<label for="state">
            <b>State</b>
        </label>
        <br>
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
        <br>';

    inputFeild("postCode", "Postcode", "text", "Please enter your postcode");
    inputFeild("psw", "Password", "password", "Please enter your Password");
    inputFeild("psw-repeat", "Re-enter Password", "password", "Please re-enter your Password");
    echo '</div></form>';

    include 'fixedfooter.php';
    ?>
</body>

</html>
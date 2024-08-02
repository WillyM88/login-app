<?php

include 'connection.php';

$query = "SELECT * FROM users;";

$data = mysqli_query($connection, $query);

$email = $_POST['email'];
$password = $_POST['password'];

$logged_in = false;
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>
<body>
    <div class="naviation">
        <ul>
            <li><a href="index.php">Home</a></li>
            
        </ul>
    </div>
    <div>
    <?php
        while($row = mysqli_fetch_assoc($data)) {
            if ($row['email'] == $email) {
                if ($row['password'] == $password) {
                    echo "Welcome: " . $row['name'] . " you have succesfully logged in. <br>";
                } else {
                    echo "<a href=\"loggin.php\">Wrong password, try again</a><br>";
                }
                break;
            };
        };
        ?>
    </div>
</body>
</html>
<?php

include 'connection.php';

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

// transforming the password into asteriscs:
$pw_length = strlen($password);

// creating the connection:

// create the query:
$query = "INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES (NULL, '$name', '$email', '$password')";

// insert data:
$success = mysqli_query($connection, $query);

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="navigation">
        <h1>Navigation</h1>
        <ul>
            <li><a href="index.php">Home</a></li>
        </ul>
    </div>
    <div>
        <h1>Confirmation:</h1>
        
        <?php

        if ($connection) {
            echo "<h2>The connection has been succesful</h2>";
        }

        if ($success) {
            echo "<h2>Your information has been submitted successfully</h2>";
        }

        echo "Hello " . $name . "<br>";
        echo "Your email: " . $email . " has been succesfully registered.<br>";
        echo "Your password: ";
        for ($i = 0; $i < $pw_length; $i++) {
            echo "*";
        }
        echo " is secure";


        ?>
    </div>
</body>
</html>
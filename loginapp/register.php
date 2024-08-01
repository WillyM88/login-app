<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Login App</title>
</head>
<body>
    <h1 class="header">Register a new account</h1>
    <div class='form'>
        <h1>Registration</h1>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="loggin.php">Log in</a></li>
        </ul>
    </div>
    <div class="form">
        <form action="registration_confirm.php" method="POST">
            Name: <input type="text" name="name"><br>
            E-mail: <input type="text" name="email"><br>
            Password: <input type="text" name="password"><br>
            <input type="submit"><br>
        </form>
    </div>
    
</body>
</html>
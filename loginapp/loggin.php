<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Login App</title>
</head>
<body>
    <h1 class="header">Log in to your account</h1>
    <div class='navigation'>
        <h1>Navigation</h1>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="register.php">Register a new account</a></li>
        </ul>
    </div>
    <div>
        <h1>Echo your code here:</h1>
    </div>
    <div class="form">
        <h1>Login Form:</h1>
        <form action="loggin_confirm.php" method="POST">
            E-mail: <input type="text" name="email"><br>
            Password: <input type="text" name="password"><br>
            <input type="submit"><br>
        </form>
    </div>
</body>
</html>
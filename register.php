<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Register</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
         <h2>Register</h2>
        <form action="registerForm.php" method="post">
                <p>Username: <input type="text" name="username" id="username"></p>
                <p>Password: <input type="password" name="password" id="password"></p>
                <input type="submit">
        </form>
    </body>
</html>
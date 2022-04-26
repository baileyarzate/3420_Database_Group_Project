<?php
session_start();


?>




<!DOCTYPE html>

<html lang="en">

    <head>

        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width,initial-scale=1">
    
        <title>Welcome to Sleep Tracker</title>

    </head>

    <body>

        <h1>Welcome to Sleep Tracker</h1>

        <form method="POST">
            <input type="text" name="username" placeholder="username"> <br> <br>
            <input type="password" name="password" placeholder="*****"> <br> <br>
            <input type="submit" name="login" value="Log In" action="login.php">
            <input type="submit" name="register" value="Register" action="register.php" style="margin: 10px">
        </form>

    </body>

</html>
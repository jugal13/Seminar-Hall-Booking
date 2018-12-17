<?php 
    session_start();
    if($_SESSION['loggedin'])
    {
        header("Location: about.php");
    }
?>

<html>
<head>
    <title>
        Register
    </title>
</head>
<body>
    <form action="adduser.php" method="post">
        Enter Username: <input type="text" name="username"/><br>
        Enter password: <input type="password" name="password"/><br>
        Confirm Password: <input type="password" name="password1"/><br>
        <input type="submit" value="register">
    </form>
</body>
</html>
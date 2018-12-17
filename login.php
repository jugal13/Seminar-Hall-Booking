<?php
    session_start()
?>
<html>
<head>
    <title>
        Login
    </title>
</head>
<body>
    <form action="about.php" method="post">
    Username: <input type="text" name="username" placeholder="username"/><br><br>
    Password: <input type="password" name="password" placeholder="****"/><br><br>
    <input type="submit" value="Login">
    </form>
    <br><br>
    <a href="register.php">New User</a>
</body>
</html>
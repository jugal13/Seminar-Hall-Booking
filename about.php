<?php 
    session_start();
$servername = "localhost:3306";
$username = "root";
$password = "";
$database = "dbproject";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$user = $_POST['username'];
$pass = $_POST['password'];

$sql = "select * from person where username = '$user' and user_password = '$pass'";
$result = $conn->query($sql);
if ($conn->query($sql) == TRUE) {
    $row = $result->fetch_assoc();
    $_SESSION['username'] = $row['username'];
    $_SESSION['loggedin'] = true;
}
?>
<html>
<head>
    <title>
        About
    </title>
</head>
<body>
    <a href="listhalls.php">Halls</a>
    <a href="listschedule.php">Schedule</a>
    <a href="bookhall.php">Book Hall</a>
    <a href="logout.php">Log out</a>
</body>
</html>

<?php
$conn->close();
?>
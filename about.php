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
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
    <title>
        About
    </title>
</head>
<body>
<div class="container" style="margin-top: 200px;">
<ul class="nav nav-pills">
  <li role="presentation" class="active"><a href="listhalls.php">Halls</a></li>
  <li role="presentation"><a href="listschedule.php">Schedule</a></li>
  <li role="presentation"><a href="bookhall.php">Book Hall</a></li>
  <li role="presentation"><a href="logout.php">Log out</a></li>
</ul>
</div>
    <!-- <a href="listhalls.php">Halls</a>
    <a href="listschedule.php">Schedule</a>
    <a href="bookhall.php">Book Hall</a>
    <a href="logout.php">Log out</a> -->
  
</body>
</html>

<?php
$conn->close();
?>

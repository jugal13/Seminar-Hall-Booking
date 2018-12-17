<?php
$servername = "localhost:3306";
$username = "root";
$password = "";
$database = "dbproject";

$hall_name = $_POST["hall"];
$slot_date = $_POST["slotdate"];
$person_name = $_POST["name"];
$start_time = $_POST["starttime"];
$end_time = $_POST["endtime"];


// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "Select * from Schedule where slot_date = '$slot_date' and hall_name = '$hall_name' and start_time = '$start_time'";
$result = $conn->query($sql);
if ($conn->query($sql) === TRUE) {
    if ($result->num_rows > 0) {
        echo "Hall is already booked";
    }
    else {
        $sql1 = "INSERT INTO Schedule (hall_name, slot_date, person_name, start_time, end_time) VALUES ('$hall_name', '$slot_date', '$person_name', '$start_time', '$end_time');";
        if ($conn->query($sql1) === TRUE) {
            echo "Hall Booked!";
        } else {
            echo "Error: " . $sql1 . "<br>" . $conn->error;
        }
    }
}
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


?>

<html>
<head>
<title>Booking Hall</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<meta http-equiv="refresh" content="3; URL=listschedule.php">
</head>
</html>


<?php
$conn->close();
?>

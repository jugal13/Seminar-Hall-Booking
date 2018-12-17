<?php
$servername = "localhost:3306";
$username = "root";
$password = "";
$database = "dbproject";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM schedule where slot_date BETWEEN CURDATE() and DATE_ADD(CURDATE(), INTERVAL 7 DAY);";

// var_dump($conn->query($sql));
$result = $conn->query($sql);
// var_dump($result->num_rows);
if ($conn->query($sql) == TRUE) {
    // echo "Vet record READ!";

?>
<html>
<head>
<title>Halls</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body>
<p><a href="index.php">Main</a></p>

<table border="2"> 
<?php 
    if ($result->num_rows > 0) { ?>
        
            <tr>
                <th>Booking_id</th>
                <th>Hall Name</th>
                <th>Date</th>
                <th>Person</th>
                <th>Start Time</th>
                <th>End Time</th>
            </tr>
        <?php while($row = $result->fetch_assoc()) {
                ?>
            <tr>
                <td><?php echo $row["id"] ?></td>
                <td><?php echo $row["hall_name"] ?></td>
                <td><?php echo $row["slot_date"] ?></td>
                <td><?php echo $row["person_name"] ?></td>
                <td><?php echo $row["start_time"] ?></td>
                <td><?php echo $row["end_time"] ?></td>
            </tr>
        <?php
            }
        } else {
            echo "0 results";
        }
?>
</table>

</body>
</html>
<?php

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    // var_dump($conn->query($sql));

}

$conn->close();
?>

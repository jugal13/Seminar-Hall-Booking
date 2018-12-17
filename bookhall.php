<html>

<head>
<title>Booking</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>

<body>

<button onclick="goBack()">Go Back</button>

<a href="index.php">Main </a> <p>&nbsp;</p>

<strong>Book Hall</strong> <p></p>

<script>
function goBack() {
    window.history.back();
}
</script>

<form action="addbooking.php" method="post">

            Hall: <select name="hall">
                    <option value="ESB Small Seminar Hall">ESB Small Seminar Hall</option>
                    <option value="ESB Big Seminar Hall">ESB Big Seminar Hall</option>
                    <option value="DES Hi-tech Seminar Hall">DES Hi-tech Seminar Hall</option>
                    <option value="LHC Seminar Hall 1">LHC Seminar Hall 1</option>
                    <option value="LHC Seminar Hall 2">LHC Seminar Hall 2</option>
                    <option value="Apex Seminar Hall">Apex Seminar Hall</option>
                  </select><p></p>
            Date: <input type="date" name="slotdate"><p></p>
            Name: <input type="text" name="name"><p></p>
            Start Time: <input type="time" name="starttime"><p></p>
            End Time: <input type="time" name="endtime"><p></p>
            <input type="submit"><p></p>

</form>


</body>
</html>

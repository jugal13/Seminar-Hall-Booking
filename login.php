<?php
    session_start()
?>
<html>
<head>
<link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
      integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="./login.css">
    <title>
        Login
    </title>
</head>
<body>
<div class = "container">
	<div class="wrapper">
		<form action="about.php" method="post" name="Login_Form" class="form-signin">       
		    <h3 class="form-signin-heading">Welcome Back! Please Sign In</h3>
			  <hr class="colorgraph"><br>
			  
			  <input type="text" class="form-control" name="username" placeholder="Username" required="" autofocus="" />
			  <input type="password" class="form-control" name="password" placeholder="Password" required=""/>     		  
			 
			  <button class="btn btn-lg btn-primary btn-block"  name="Submit" value="Login" type="Submit">Login</button>  			
		</form>			
	</div>
</div>
	
    <!-- <form action="about.php" method="post">
    Username: <input type="text" name="username" placeholder="username"/><br><br>
    Password: <input type="password" name="password" placeholder="****"/><br><br>
    <input type="submit" value="Login">
    </form>
    <br><br>
    <a href="register.php">New User</a> -->
    <script
      src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
      integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
      crossorigin="anonymous"
    ></script>
</body>
</html>
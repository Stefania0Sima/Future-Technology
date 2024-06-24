<?php
    session_start();
    $message="";//super-variable message
    if(count($_POST)>0) {
        //The code checks if any data has been submitted
        // via the POST method using count($_POST) > 0
        $con = mysqli_connect('localhost','root','','login_register') or die('Unable To connect'); //making conn with server
        $result = mysqli_query($con,"SELECT * FROM login WHERE username='" . $_POST["username"] . "' and password = '". $_POST["password"]."'"); //getting the needed informations to the result variable
        $row  = mysqli_fetch_array($result);//getting data from super-global
        if(is_array($row)) { //cheking statement
        $_SESSION["username"] = $row['username'];
        $_SESSION["password"] = $row['password'];
        } else {
         $message = "Invalid Username or Password!"; //calling a message
        }
    }
    if(isset($_SESSION["username"])) {
    header("Location:usersregistered.php"); //reddirecting to page
    }
?>
 <!DOCTYPE html>
<html>
<head>
	<title> Administration</title>
	<link rel="stylesheet" href="css\style1.css">
	<script src="https://kit.fontawesome.com/0cac47e765.js" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
	<img src="img/login.png"/>
		<form method="POST">
			<div class="form-input">
				<input type="text" name="username" placeholder="Username" required />
			</div>
			<div class="form-input">
				<input type="password" name="password" placeholder="Password" required />
			</div>
			<input type="submit" type="submit" value="LOGIN" class="btn-login"/>
		</form>
	</div>
</body>
</html>
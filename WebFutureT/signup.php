<?php
include 'config.php';

if (isset($_POST['submit'])) {  //checks if a variable is set and then hecks the conditions
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$passwordr = md5($_POST['passwordr']);
	$products = $_POST['products'];

	if ($password == $passwordr) { //making sure psw = confirmation-psw
		$sql = "SELECT * FROM users WHERE email='$email'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO users (email, password, products)
					VALUES ('$email', '$password', '$products')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>alert('User Registration Completed.')</script>";
				$email = "";
				$_POST['password'] = "";
				$_POST['passwordr'] = "";
				$products = "";
			} else {
				echo "<script>alert('Something Wrong Went.')</script>";
			}
		} else {
			echo "<script>alert('Email Already Exists.')</script>";
		}
		
	} else {
		echo "<script>alert('Password Not Matched.')</script>";
	}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width,initial-scale=1.0" />

	<title>The Future</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css2?family=Arvo:ital,wght@1,700&display=swap" rel="stylesheet">

</head>
<body>
	<nav class="navbar">
		<div class="navbar_container">
			<a href="index.php" id="navbar_logo">
				<i class="fas fa-digital-tachograph"></i> Future Tech
			</a>
			<div class="navbar_toggle" id="mobile_menu">
			<span class="bar"></span>
			<span class="bar"></span>
			<span class="bar"></span>
		</div>
		<ul class="navbar_menu">
			<li class="navbar_items">
				<a href="index.php" class="navbar_links">Home</a>
			</li>
			<li class="navbar_items">
				<a href="tech.php" class="navbar_links">Tech</a>
			</li>
			<li class="navbar_items">
				<a href="products.php" class="navbar_links">Products</a>
			</li>
			<li class="navbar_btn">
				<a href="signup.php" class="button">SIGN UP</a>
			</li>
		</ul>
		</div>
	</nav>
	<!-- Presantation Section -->
	<form action="signup.php" method="POST" style="border:1px solid #ccc">
  <div class="container">
    <h1>Sign Up</h1>
    <p>Please fill in this form to be the next to try our products.</p>
    <hr>

    <label for="email"><b>Email</b></label>
    <input type="email" placeholder="Enter Email" name="email" required>

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password"  required>

    <label for="passwordr"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="passwordr"  required>

    <label class="select"> Products we offer:</b></label><br><br>
    <select class="options" name="products">
    	<option class="option" value="">  --Select--</option>
    	<option class="option" value="V.R Glasses">V.R Glasses</option>
    	<option class="option" value="Advanced Drone">Advanced Drone</option>
    	<option class="option" value="A.I Assistant">A.I Assistant</option>
    	<option class="option" value="Holo Ring">Holo Ring</option>
    </select><br><br>


    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label>

    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

    <div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button>
      <button name="submit" class="signupbtn">Sign Up</button>
    </div>
  </div>
</form>
	<!-- Services Section -->

<!-- Footer Section -->
<div class="footer_container">
	<div class="footer_links">
		<div class="footer_link_wrapper">
			<div class="footer_link_items">
				<h2>About Us</h2>
				<a href="howitworks.php">How it works</a>
				<a href="testimonials.php">Testimonals</a>
				<a href="careers.php">Careers</a>
				<a href="#">Terms of Service</a>
			</div>
			<div class="footer_link_items">
				<h2>Contact Us</h2>
				<a href="#">Contact</a>
				<a href="#">Support</a>
				<a href="#">Sponsorships</a>
			</div>
		</div>
		<div class="footer_link_wrapper">
			<div class="footer_link_items">
				<h2>Media</h2>
				<a href="#">Instagram</a>
				<a href="#/">Facebook</a>
				<a href="#">YouTubee</a>
				<a href="#">Twitter</a>
			</div>
		</div>
	</div>
	<div class="social_media">
		<div class="social_media_wrap">
			<div class="footer_logo">
				<a href="#" id="footer_logo"><i class="fas fa-digital-tachograph"></i>FT</a>
				
			</div>
			<p class="website_right"> The Future in Tech 2023. All right reserve</p>
			<div class="social_icon">
				<a href="#" class="social_icon_link" target="_blank">
					<i class="fab fa-facebook"></i>
					<a href="#" class="social_icon_link" target="_blank">
					<i class="fab fa-instagram"></i>
					<a href="#" class="social_icon_link" target="_blank">
					<i class="fab fa-twitter"></i>
					<a href="#" class="social_icon_link" target="_blank">
					<i class="fab fa-linkedin"></i>
					<a href="#" class="social_icon_link" target="_blank">
					<i class="fab fa-youtube"></i>
				</a>
			</div>
		</div>
	</div>
</div>

	<script src="app.js"></script>
</body>
</html>
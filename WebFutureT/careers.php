<?php
include 'config.php';
if (isset($_POST['submit'])) {  
	$email = $_POST['email'];
	$name = $_POST['name'];
	$pnumber = $_POST['pnumber'];
	$lcw = $_POST['lcw'];
	$skills = $_POST['skills'];
	$question = $_POST['question'];

	$to = "stefania.sima02@e-uvt.ro";
	$subject = "Job Application";
	$body = "From: $name\n";
	$body .= "Email: $email\n";
	$body .= "Phone Number: $pnumber\n";
	$body .= "Location: $lcw\n";
	$body .= "Skills: $skills\n";
	$body .= "Question: $question\n";

	$headers = "From: $email";

	if (mail($to, $subject, $body, $headers)) {
		echo "Application email has been sent successfully";
	} else {
		echo "Application email was not sent";
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
	<form action="careers.php" method="POST" style="border:1px solid #ccc">
  <div class="container">
    <h1>Job Form</h1>
    <p>Please fill in this form to be a part of out company.</p>
    <hr>

    <label for="email"><b>Email</b></label>
    <input type="email" placeholder="Enter Email" name="email" required>

    <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter Name/Last Name" name="name"  required>

    <label for="pnumber"><b>Phone Number</b></label>
    <input type="tel" placeholder="Enter Phone Number" name="pnumber" required >

    <label for="lcw"><b>Last Company You Worked for</b></label>
    <input type="text" placeholder="Company Name" name="lcw" required >

    <label for="skills"><b>Skills</b></label>
    <input type="text" placeholder="Skills" name="skills" required>

    <label for="question"><b>Questions</b></label>
    <input type="text" placeholder="Question" name="question" required >


    <p>By creating submiting you give us permision to do a background check of your previous work enviroment.</p>

    <div class="clearfix">
      <button name="submit" class="signupbtn">Submit</button>
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
			<p class="website_right"> The Future in Tech 2021. All right reserve</p>
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
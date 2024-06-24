<?php
$server="localhost";
$username="root";
$password="";
$database="login_register";
//The code declares the server, username, password, and database
//variables to store the necessary connection information.

$conn = mysqli_connect($server, $username, $password, $database);

//The mysqli_connect() function is used to establish a connection to the MySQL database
// It takes four parameters: server, username, password, and database.
if (!$conn) {
	echo "<script>alert('Connection Failed. ')</script>";

}
//If the connection is successful, the mysqli_connect() function returns a MySQL
//connection object, which is assigned to the $conn variable.
?>

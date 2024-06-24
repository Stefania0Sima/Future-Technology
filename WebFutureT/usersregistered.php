<?php
session_start();
?>
<!DOCTYPE html> 
<html> 
	<head> 
	<link rel="stylesheet" href="css/style2.css">
		<title>Users Registered for Trials</title> 
	</head> 
	<body> 
	<h1>Welcome Admin </h1> 
	<h2>Click here to <a href="logout.php" title="Logout">Logout.</a></h2>
	<table> 
	<tr> 
		<th colspan="4"><h2>Users</h2></th>  <!-- Specifying the number of columns a cell should span -->
		</tr> 
			  <th> ID/Action </th> 
			  <th> Email </th> 
			  <th> Password</th>
			  <th> Products</th>
			  
		</tr> 
		<?php 
		$conn = mysqli_connect("localhost", "root", "", "login_register"); //making the connection to my database
		$sql = "SELECT * FROM users"; //getting information from users table
		$result = $conn->query($sql); //Checking connection
		
		if($result->num_rows > 0){ // cheking conn between the results and the rows of info
			while($row = $result->fetch_assoc()){
				echo "<tr><td>" . $row["id"] . "</td><td>" . $row["email"] . "</td><td>" . $row["password"] . "</td><td>" . $row["products"] . " </td></tr>";
				echo " <tr><td><a class='delete_btn' href='./delete.php?id=" .$row['id'] ."'> Delete</a></td></tr>";
			}
		}else{
			echo "No Results";
		}
		$conn->close();
		?>

	</table> 
	</body> 
	</html>
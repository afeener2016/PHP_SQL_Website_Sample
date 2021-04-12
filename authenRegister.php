<html>
	<head>
		<title>FITB Register</title> 
		<link rel="stylesheet" type="text/css" href="Style.css" />
	</head>
	
<ul class="menu">
  <li><a href="Home.php">Home</a></li>
  <li><a href="Buy.php">Buy Tickets</a></li>
  <li><a href="LoginView.php">View My Tickets</a></li>
  <li><a href="Contact.php">Contact Us</a></li>
  <li><a class="active" href="Register.php">Register</a></li>
</ul>
<p>

<?php
 require('db_connect.php');

$username = $_POST['user_id'];
$password = $_POST['user_pass'];
$firstname = $_POST['user_fname'];
$lastname = $_POST['user_lname'];
$birthday = $_POST['user_bday'];

//filters
$username = filter_var($username, FILTER_SANITIZE_EMAIL);
$password = filter_var($password, FILTER_SANITIZE_STRING);
$firstname = filter_var($firstname, FILTER_SANITIZE_STRING);
$lastname = filter_var($lastname, FILTER_SANITIZE_STRING);

$sql = $connection->prepare("INSERT INTO  `user_login` (username,password,firstname,lastname,birthday)VALUES ('$username', '$password','$firstname', '$lastname','$birthday')");

if (!filter_var($username, FILTER_VALIDATE_EMAIL) === false) {
	$sql->execute();
	echo "New account created successfully";
} else {
    echo("Invalid email address");
}




$sql->close();
$connection->close();
?>

</p>
</html>
<html>
	<head>
		<title>FITB Buy</title> 
		<link rel="stylesheet" type="text/css" href="Style.css" />
	</head>
<body>

<ul class="menu">
  <li><a href="Home.php">Home</a></li>
  <li><a  class="active" href="Buy.php">Buy Tickets</a></li>
  <li><a href="LoginView.php">View My Tickets</a></li>
  <li><a href="Contact.php">Contact Us</a></li>
  <li><a href="Register.php">Register</a></li>
</ul>


<p>
<?php  
 require('db_connect.php');

// Assign values from form to variables.
$username = $_POST['user_id'];
$password = $_POST['user_pass'];
$ticketcount = $_POST['user_tickets'];

//filter email & password for security
$username = filter_var($username, FILTER_SANITIZE_EMAIL);
$password = filter_var($password, FILTER_SANITIZE_STRING);

$sql = $connection->prepare("UPDATE user_login SET tickets='$ticketcount' WHERE username='$username' and Password='$password'");

if (!filter_var($username, FILTER_VALIDATE_EMAIL) === false) {
	$sql->execute();
	echo "Tickets Purchased Successfully";
} else {
    echo("$username is not a valid email address");
}

$sql->close();
mysqli_close($connection);
?>
</p>
</html>


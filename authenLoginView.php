<html>
	<head>
		<title>FITB Tickets</title> 
		<link rel="stylesheet" type="text/css" href="Style.css" />
	</head>
<body>

<ul class="menu">
  <li><a href="Home.php">Home</a></li>
  <li><a href="Buy.php">Buy Tickets</a></li>
  <li><a class="active" href="LoginView.php">View My Tickets</a></li>
  <li><a href="Contact.php">Contact Us</a></li>
  <li><a href="Register.php">Register</a></li>
</ul>


<p>
<?php  
require('db_connect.php');
	

$username = $_POST['user_id'];
$password = $_POST['user_pass'];

$username = filter_var($username, FILTER_SANITIZE_EMAIL);
$password = filter_var($password, FILTER_SANITIZE_STRING);


// searches for ticket count
$ticket = "SELECT `tickets` FROM `user_login` WHERE username='$username' and Password='$password'";
$fname = "SELECT `firstname` FROM `user_login` WHERE username='$username' and Password='$password'";

 
$result = mysqli_query($connection,  $ticket) or die(mysqli_error($connection));
$resultB = mysqli_query($connection,  $fname);

$count = mysqli_num_rows($result);


//if valid account
if ($count == 1){


while($row = mysqli_fetch_assoc($resultB)){
      echo "Hello ".$row['firstname'];
}
	
//print ticket
while($row = mysqli_fetch_assoc($result)){
      echo " you own ".$row['tickets']." ticket(s)";
}

}else{
echo "Invalid Login Credentials";
}
?>
</p>
</body>
</html>

<html>
	<head>
		<title>FITB View</title> 
		<link rel="stylesheet" type="text/css" href="Style.css" />
	</head>
<body>
<div <div align="center">
<ul class="menu">
  <li><a href="Home.php">Home</a></li>
  <li><a href="Buy.php">Buy Tickets</a></li>
  <li><a class="active" href="LoginView.php">View My Tickets</a></li>
  <li><a href="Contact.php">Contact Us</a></li>
  <li><a href="Register.php">Register</a></li>
</ul>

<h1>Sign In To See Your Tickets</h1>
    <form id="login-form" method="post" action="authenLoginView.php" >
        <table class="center" >
            <tr>
                <td><label for="user_id">E-Mail:</label></td>
				</tr>
				<tr>
                <td><input type="text" name="user_id" id="user_id"></td>
            </tr>
            <tr>
                <td><label for="user_pass">Password:</label></td>
			</tr>
			<tr>
                <td><input type="password" name="user_pass" id="user_pass"></input></td>
            </tr>
            <tr>	
                <td><input type="submit" value="Submit" />
					<input type="reset" value="Reset"/>
            </tr>
        </table>
    </form>
		</div>
</body>
</html>
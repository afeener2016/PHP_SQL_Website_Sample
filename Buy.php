<html>
	<head>
		<title>FITB Buy</title> 
		<link rel="stylesheet" type="text/css" href="Style.css" />
	</head>

<ul class="menu">
  <li><a href="Home.php">Home</a></li>
  <li><a class="active" href="Buy.php">Buy Tickets</a></li>
  <li><a href="LoginView.php">View My Tickets</a></li>
  <li><a href="Contact.php">Contact Us</a></li>
  <li><a href="Register.php">Register</a></li>
</ul>

<h1>Reserve Your Tickets</h1>

    <form id="login-form" method="post" action="authenBuy.php" >
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
                <td><label for="user_pass">Ticket Amount (max 10 per customer): </label></td>
			</tr>
			<tr>
                <td><input type="number" name="user_tickets" id="user_tickets" min="0" max="10" required></input></td>
            </tr>
			
            <tr>	
                <td><input type="submit" value="Submit" />
					<input type="reset" value="Reset"/>
            </tr>
        </table>
    </form>
		</div>
<p>

</p>
</html>
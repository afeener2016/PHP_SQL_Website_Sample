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

	<h1>
		Register an Account
	</h1>
	
<form id="register-form" method="post" action="authenRegister.php" >
<table class="center">
<tr>
  <td>E-Mail:</td>
  </tr>
  <tr>
	<td><input type="text" name="user_id" required /></td>
  </tr>
  <tr>
    <td>Password: </td>
  </tr>
  <tr>
	<td><input type="password" name="user_pass" required /></td>
  </tr>
  <tr>
    <td>First Name: </td>
	</tr>
	<tr>
	<td><input type="text" name="user_fname" required /></td>
  </tr>
  <tr>
    <td>Last Name: </td>
  </tr>
  <tr>
	<td><input type="text" name="user_lname" required /></td>
  </tr>
  <tr>
      <td>Birthday: </td>
  </tr>
  <tr>
	<td><input type="date" name="user_bday" required ></td>
  </tr>

  <tr>
	 <td><input type="checkbox" name="Subscribe" value="user_agree" required />I agree.</td>
  </tr>
		<tr>
			<td><input type="submit" value="Submit" />
			<input type="reset" /></td>
		</tr>
  </table>
  </form>
</html>
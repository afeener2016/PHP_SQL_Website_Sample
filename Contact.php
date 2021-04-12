	<html xmlns="http://www.w3.org/1999/xhtml">
	
	<head>
		<title>Contact Us</title> 
		<link rel="stylesheet" type="text/css" href="Style.css" />
	</head>

		
	<body>
<ul class="menu">
  <li><a href="Home.php">Home</a></li>
  <li><a href="Buy.php">Buy Tickets</a></li>
  <li><a href="LoginView.php">View My Tickets</a></li>
  <li><a class="active" href="Contact.php">Contact Us</a></li>
  <li><a href="Register.php">Register</a></li>
</ul>
		
	<h1>
		Send us an E-Mail
	</h1>
	
		
<table class="center">
<form action="mailto:afeener2016@my.fit.edu" method="post" enctype="text/plain">
  <tr>
  <td>Name:</td>
  </tr>
  <tr>
	<td><input type="text" name="name"></td>
  </tr>
  <tr>
    <td>E-Mail:</td>
  </tr>
  <tr>
	<td><input type="text" name="Contact"></td>
  </tr>
  <tr>
    <td>Comment: </td>
	</tr>
	<tr>
	<td><textarea name="message" rows="10" cols="30"> </textarea></td>
  </tr>
		<tr>
			<td><input type="submit" value="Send" />
			<input type="reset" /></td>
		</tr>
  </table>
  </form>
	</body>
</html>
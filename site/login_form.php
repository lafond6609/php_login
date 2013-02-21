<html>
<head>
<title>LOGIN PAGE</title>
</head>
<body>
	<?php
	$host = 'localhost';
	$user = 'root';
	$password = 'root';
	$database = 'secure_login';



	$link = mysql_connect($host,$user,$password) or die('Error in server information');
	mysql_select_db($database,$link) or die('Can not Select Database');

	$username = mysql_real_escape_string($_POST['username']);
	$password = mysql_real_escape_string($_POST['password']);
	$email = mysql_real_escape_string($_POST['email']);
	$query = "select * from users where username='$username' and password='$password' and email='$email'";
	$res = mysql_query($query);

	$rows = mysql_num_rows($res);
	if($rows==1)

	{

	$_SESSION['email'];
	$_SESSION['username'];
	$_SESSION['password'];

	header("location:success.php");
	}
	else
	{
	echo '<strong><p style="color:red" align="center">Incorrect information </br> Go back and try again.</p><strong>';

	}

	?>
<table width="200" border="0" cellspacing="1" align="center">
<form id="form1" name="form1" method="post" action="login.php">
<tr>
<td colspan="2"><h2>Member Login</h2></td>
</tr>
<tr>
<td>Email:</td>
<td>
<input type="text" name="email" id="email"/>
</td>
</tr>

<tr>
<td>UserName:</td>
<td>
<input type="text" name="username" id="username" />

</td>
</tr>
<tr>
<td>Password:</td>
<td><input type="password" name="password" id="password" /></td>
</tr>
<tr>
<td colspan="2" align="center">
<input type="submit" name="btnSubmit" id="btnSubmit" value="Log In" />

</td>
</tr>
</form>
</table>
</body> 

<html>
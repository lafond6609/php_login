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
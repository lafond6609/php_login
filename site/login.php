<?php
session_start();
$host = 'localhost';
$user = 'root';
$pass = 'root';
$database = 'secure_login';



$link = mysql_connect($host,$user,$pass) or die('Error in server information');
mysql_select_db($database,$link) or die('Can not Select Database');
$username = mysql_real_escape_string($_POST['username']);
$password = mysql_real_escape_string($_POST['password']);
$email = mysql_real_escape_string($_POST['email']);


$query = "select * from users where username='$username' and password='$password' and email='$email'";
$res = mysql_query($query);
$rows = mysql_num_rows($res);

if($rows==1)
{
(!isset($_SESSION['username']));
(!isset($_SESSION['password']));
(!isset($_SESSION['email']));

echo "Welcome, $username";

}
else
{
echo '<strong><p style="color:red" align="center">Incorrect information </br> Go <a href="login_form.php">back</a> and try again.</p><strong>';

}

?>
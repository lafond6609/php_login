
<?php
$host = 'localhost';
$user = 'root';
$password = 'root';

$database = 'secure_login';

$conn = mysql_connect($host,$user,$password) or die ('Server information is not correct');
mysql_select_db($database,$conn) or die('Database information is not correct');

$userName =  mysql_real_escape_string($_POST['txtUser']);

$email = mysql_real_escape_string($_POST['txtEmail']);

$password =  mysql_real_escape_string($_POST['txtPassword']);


if(isset($_POST['btnRegister']))
{
$query = "insert into users(username,email,password)values('$userName','$email','$password')";
$res = mysql_query($query);
header('location:reg_success.php');
}

?>
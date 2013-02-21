<?php
session_start();
if($_SESSION['username']!='')
{
header("location:login_form.php");
	
}
else
{
echo'<h2>Success.</br>Welcome.'.$username.'</h2>';

}






?>
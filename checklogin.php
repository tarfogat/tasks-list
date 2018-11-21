<?php
session_start();
$link= mysqli_connect("mysql.zzz.com.ua","tarfa","Trixman5","tarfa");
if (!$link) {
    die('Could not connect: ' . mysql_error());
}

$username= $_POST['t_username'];
$password = $_POST['t_password'];

$loginquery = "Select username and password from admin where username ='".$username."' and password ='".$password."'";
$resultquery  =  mysqli_query($link, $loginquery);
$numrow = mysqli_num_rows($resultquery);
if($numrow > 0)
{
	$_SESSION['user'] = $username;
	header("location:admin.php");
}
else

{
	header("location:login.php");
}

?>
<?php
$link= mysqli_connect("mysql.zzz.com.ua","tarfa","Trixman5","tarfa");
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
{

}

$task=$_POST["task"];
$user=$_POST["user"];
$email=$_POST["email"];
$image=$_POST["image"];
$stauts=$_POST["stauts"];
$tquery="insert into tasks(discription,username,email,img,stuts)
values('$task','$user','$email','$image','$stauts')";
$resultquery=mysqli_query($link,$tquery);
if($resultquery)
{
	echo"information has been successfully saved";
	}
	else
	{
	echo mysqli_error($link);
	}
    mysqli_close($link);
	
?>
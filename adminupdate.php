<?php
$link= mysqli_connect("mysql.zzz.com.ua","tarfa","Trixman5","tarfa");
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
{

}

$id=$_POST["id"];
$discription=$_POST["discription"];
$Stauts=$_POST["Stauts"];
$tquery="UPDATE tasks SET discription='$discription', stuts='$Stauts' WHERE id = ".$id;
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
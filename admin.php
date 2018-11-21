
<html lang="en">
  <head>
    <title>Admin</title>
	
	<link type="text/css" href="css/main.css" rel="stylesheet" />

  </head>

  <body>
  
<!-- ********************************************* The Header ***************************************************** -->

   <center>

    <header id="header">
  
  </header>
  

<!-- ********************************************* The Body ******************************************************* -->
<div id="contents"> 
 
   <center>
   <section id="item">
   <div align="left">

	
	
	<br>
	<br>
	<div align="center">



		  <table cellspacing=5 cellpadding=1 ><tr><td colspan="2"><font style="text-align:center;font-size:33px;font-weight:bold;">Tasks list</td></tr>
		  <tr><td colspan="2"><font style="text-align:center;font-size:33px;font-weight:bold;"><?php
$link= mysqli_connect("mysql.zzz.com.ua","tarfa","Trixman5","tarfa");
if (!$link) {
    die('Could not connect: ' . mysql_error());
}

echo '<br>';
echo '<br>';
 $result = mysqli_query($link,"SELECT * FROM tasks");
echo '<table border="5" cellspacing=5 cellpadding=1>';
    while($row = mysqli_fetch_array($result))
      {
      echo '<tr><td>'.'ID'.-$row['id'] . " </td><td>". $row['discription'] . " </td><td>" . $row['username']. "  </td><td>" . $row['email']. " ". "  </td><td>" . $row['stuts'];
	  echo "<br/>";
	  
      }

    mysqli_close($link);
    ?></font></table>
	<td>
	</td>

	</tr>
</table>
</font>
</div>
<hr color="#762C0A" width="100%"/>
	<div align="center">
	 <form  action="adminupdate.php" method="post">
	  <table cellspacing=2 cellpadding=5 >
	  <tr><td colspan="2"><font style="text-align:center;font-size:33px;font-weight:bold;">TASK</font></td></tr>
	  <tr><td style="font-size:20px;"><font color="red"></font>TASK ID:</td><td><input type="numper" name="id" required id="fr"/></td></tr>
	  <tr><td style="font-size:20px;"><font color="red"></font>  discription:</td><td><input type="text" name="discription" required id="fr"/></td></tr>
	  <tr><td style="font-size:20px;"><font color="red"></font> Stauts:</td><td><input type="tel" name="Stauts" id="fr"  required /></td></tr>
	 
	  </table>
	 
	  <br>
	  <br>
	  <form method="get" action="adminupdate.php?id=".$pid."">

    <button type="submit"> Save</button>
</form>
	</div>

   

   
   


</section>
   </center>

    
   </div>
   
  </body>
  
</html>



<html lang="en">

  <head>
    <title>HOME</title>
	
	<link type="text/css" href="css/main.css" rel="stylesheet" />
	
	
  </head>
 
  
  <body>
  

  <center>

    <header id="header">

  </header>
  
 
   
  </center>

<!-- ********************************************* The Body ******************************************************* -->

   <center>
   <section id="item">

<div align="center">
<form align="right" method="get" action="login.php">
    <button type="submit"> LOGIN</button>
</form>

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
      echo '<tr><td>'.'Task'.-$row['discription'] . " </td><td>" . $row['username']. "  </td><td>" . $row['email']. " ". "  </td><td>" . $row['stuts'];
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

<div>
<form align="right" method="get" action="creattask.php">
    <button type="submit"> create</button>
</form>
</div>


 
   </section>

   
   
   </center>
   
  
   
    
   </div>
   
  </body>
  
</html>

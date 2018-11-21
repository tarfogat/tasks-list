
<html lang="en">
  <head>
    <title>CREATE TASK</title>
	
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
   <form align="right" method="get" action="login.php">
    <button type="submit"> LOGIN</button>
</form>
   
	
	
	<br>
	<br>
	
	<div align="center">
	 <form  action="config.php" method="post">
	  <table cellspacing=2 cellpadding=5 >
	  
	  <tr><td colspan="2"><font style="text-align:center;font-size:33px;font-weight:bold;">TASK</font></td></tr>
	  
	  <tr><td style="font-size:20px;"><font color="red"></font>  TASK TEXT:</td><td><input type="text" name="task" required id="fr"/></td></tr>
<tr><td style="font-size:20px;">USER NAME :</td><td><input type="text" name="user" id="fr"/></td></tr>
	  <tr><td style="font-size:20px;">Email:</td><td><input type="email" name="email" id="fr"/></td></tr>
	  <tr><td style="font-size:20px;"><font color="red"></font>Image:</td><td><input type="file" name="image" id="fr"/></td></tr>
      <tr><td style="font-size:20px;">STAUTS:</td><td><input type="text" name="stauts" id="fr"/></td></tr>
	  </table>
	  
	  <br>
	  <br>
	
<form method="get" action="config.php">
    <button type="submit">SAVE</button>
</form>

	  
	 </form>
	 
	 <input type="button" onclick="alert('Hello World!')" value="PREVIWE"> 
     </form>
	</div>
	 
   </div>
   </section>
   

   
   </center>
   

   </div>
   
  </body>
  
</html>


    <?php

     error_reporting(E_ALL ^ E_NOTICE);
     
	 session_start(); 
     
	 require("function.php");
     
	 require("dbc.php");
     
	 if(!isset($_GET['id'] )&&isset($_SESSION['username'])) header("location:?id=".getID($_SESSION['username']));

     
	 ?>
    
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    
    <html xmlns="http://www.w3.org/1999/xhtml">
    
    <head>
    
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    
    <title>Untitled Document</title>
   
   <link rel="stylesheet" style="text/css" href="images/style.css" />
   
   </head>

   
   <body>
   
   <div id="container">

   
   <?php
   
   if(!isset($_SESSION['username']))

   {
	
   
   ?>
   
   <table align="center">
    
    
    <h2>Mobile Shop Sales and Inventory Managment System</h2>
   
   <form action="auth.php" method="post">
   
   <tr><td>User name:</td><td><input type="text" name="username" placeholder="Enter username" /></td></tr>
   
   <tr><td>Password:</td><td><input type="password" name="password" placeholder="Enter your Password" /></td></tr>
   
   </table>
   
   <strong><input style="margin-left:65px; width:100px; height:35px; background:#000 ; color:#FFF"type="submit" value="Login" align="center"  /></strong>
  
  </form>	
   
   <?php

    if(isset($_GET["feedback"]))
	{	
    
	echo '<br>';
    
	echo'<p style="margin-left:65px;">';
	
	echo $_GET["feedback"];
	
	echo'</p>';
    }

}
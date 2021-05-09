<?
$host="localhost";
$email="naqeeb@gmail.com";
$password="naqeeb";
$db="grocery";
mysql_connect($host,$email,$password);
mysql_select_db($db);
if(isset(['email']))
{
$sql="select*from login where email='".$email,"'AND password='".$password."'limit 1";
$result=mysql_query($sql);
if(mysql_num_rows($result==1){
echo"you have successfull login";
exit();
}
else
{
echo"you have incorrect passwors";
exit();}}
?>
<title>Login page</title>
<link rel="stylesheet" href="css/style.css" />
<body style="background:#FFFFFF">
<div id="main.wrapper">
<center>
<h2>login form</h2>
<img src="../picture/uu.PNG" height="300" class="avatar"/>
</center>
</div>
<form action="log_pro.php" method="post">
<?php
			if(isset($_REQUEST['msg']) && $_REQUEST['msg']==1){
			
			echo "sorry invalid information!";
			}
			?>
<table align="center" width="20%" border="2" style="background:#999999">
  <tr>
    <td colspan="2" align="center">LOGIN</td>
  </tr>
  <tr>
    <td>email</td>
    <td><input type="text" name="n"/></td>
  </tr>
  <tr>
    <td>password</td>
    <td><input type="password" name="pass" /></td>
  </tr>
<td><a href="index-2.php"><input type="button"value="submit"></td>
</table>
</form>
<body background="../picture/red-fruit-and-vegetables-from-above.jpg">
<?php
include('header2.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<h4><font color="#FFFFFF">Login Page</font></h4>
<div id="main.wrapper">
<center>
<title>Login page</title>
<img src="../picture/uu.PNG" height="300" align="center" class="avatar"/>
</div>

<form action="login_pro2.php"method="post">
	<?php
			if(isset($_REQUEST['msg']) && $_REQUEST['msg']==1){
			
			echo "sorry invalid information!";
			}
			?>
<table width="100"  border="1" align="center" width="30px" border="2" bgcolor="#999966">
<tr>
    <td colspan="2" align="center"></td>
  </tr>
  <tr  >
    <td>Email</td>
    <td><input type="text" name="e" class="inputvalues" placeholder="Type your Email" required="required"/></td>

  </tr>
  <tr>
    <td>Password</td>
    <td><input type="password" name="p" class="inputvalues" placeholder="Type your password"/></td>
  </tr>
  <tr>
  <td></td>
    <td><a href="index-3.php"><input type="button"value="submit"></td>
   
  </tr>
</table>
</form>

</body>
</html>



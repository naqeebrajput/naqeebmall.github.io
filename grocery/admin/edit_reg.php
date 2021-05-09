<?php
$id=$_REQUEST['id'];
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"grocery");
$q="select * from register where id='$id'";
$r=mysqli_query($con,$q);
$row=mysqli_fetch_array($r);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>cs</title>
</head>
<body bgcolor="#00FFCC">
<table>
<form action="reg_update.php" method="post" name="form1" onsubmit="return validate" enctype="multipart/form-data">
<input type="hidden"name="id"value="<?php echo $id?>"/>





<table width="100%" border="0" height="200px" bgcolor="#00CCCC">
	<tr><td><h1>user</h1></td></tr>
<tr align="center">
<tr>
<td>Name</td>
<td><input type="text"name="n" />
</td>
</tr>
<tr>
<td>email</td>
<td><input type="text"name="e" />
</td>
</tr>
<tr>
<td>mobile</td>
<td>
<input type="text" name="d" />

</td></tr>
<tr>
<td>address</td>
<td><input type="text"name="ad" />
</td>
</tr>
<tr>
<td>company</td>
<td><input type="text"name="am" />
</td>
</tr>
 <tr>
    <td>city</td>
    <td><input type="text" name="p"/></td>
  </tr>
<tr>
<td></td>
<td><input type="submit" value="Update">
</td>
</tr>
</table>
</body>
</html>
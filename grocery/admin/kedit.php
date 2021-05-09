<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" 
</head>
<?php
include('header.php');

?>
<?php
$id=$_REQUEST['id'];
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"grocery");
 $q="select*from rida where id=$id";
$r=mysqli_query($con,$q);
$row=mysqli_fetch_array($r);
?>
<table><table>


<body>
<form action="kupdate.php" method="post" name="form1"onsubmit="return validate()">
<input type="hidden"name="id"value="<?php echo $id?>"/>
<table border="1" align="center">
<table border="1" align="center">
<tr align="center"><img src="picture1/download (5).jpg" width="350 " height="2000" align="right"/>
<td colspan="2"><h1>sell items</h1></td></tr>
<tr>
<td>product name</td>
<td><input type="text" name="n">
</td>
</tr>
<tr>
<td>price</td>
<td><input type="text" name="e" />
</td>
</tr>
<tr>
<td>Quantity</td>
<td><input type="text" name="q" />
</td>
</tr>
<tr>
<td>date</td>
<td><input type="date" name="d-m-y" />
</td>
<tr>
<td>pic</td>
<td><input type="file" name="pic" />
</td
<tr>
<td></td>
<td> <input type="submit" value="submit" /></td>
</tr>
</table>
</form>
<?php
include('footer.php');

?>


>

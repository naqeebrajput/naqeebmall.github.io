<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" 
</head>
<?php
include('header.php');

?>
<table><table>

<script>
function validate()
{
if(document.form1.n.value=="")
{
alert("plz enter product name");
return false;
}
else if(document.form1.e.value=="")
{
alert("please enter price ");
return false;
}
else if(document.form1.d-m-y.value=="")
{
alert("plz enter date");
return false;
}
else if(document.form1.pic.value=="")
{
alert("plz enter pic");
return false;
}
else
{
return true;
}
}
</script>
<body>
<form action="kinsert.php" method="post" name="form1"onsubmit="return validate()">
<table border="1" align="center">
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

<td></td>
<td> <input type="submit" value="submit" /></td>
</tr>
</table>
</form>
<?php
include('footer.php');

?>



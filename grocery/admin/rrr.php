<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
</head>
<?php
include('header.php');

?>
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
else if(document.form1.den.value=="")
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
<form action="rinsert.php" method="post" name="form1"onsubmit="return validate()">

<table border="1" align="center">
<tr>
<td colspan="2"><h1></h1></td></tr>
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
<td>date</td>
<td><input type="date" name="d-m-y" />
</td>
</tr>
<tr>
<td>picture</td>
<td><input type="file" name="pic" />
</td>
</tr>
<tr>
<td></td>
<td> <input type="submit" value="submit" /></td>
</tr>
</table>
</form>



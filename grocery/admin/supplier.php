<head>
<marquee onmouseover="this.stop()" onmouseout="this.start()"><font color="#660000" ><h4>SUPPLIER OF GROCERY SHOP MANAGEMENT SYSTEM</h4></marquee>
<?php
include('header.php');
?>
</body>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script>
function validate()
{
if(document.form1.n.value=="")
{
alert("plz enter your name");
return false;
}
else if(document.form1.e.value=="")
{
alert("plz enter your email");
return false;
}
else if(document.form1.d.value=="")
{
alert("plz enter your mobile");
return false;
}
else if(document.form1.ad.value=="")
{
alert("plz enter address");
return false;
}
else if(document.form1.am.value=="")
{
alert("plz enter company");
return false;
}
else if(document.form1.p.value=="")
{
alert("plz enter city");
return false;
}
else
{
return true;
}
}
</script>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<body background="picture/imagesH41YDFW9.jpg">
<form action="spp_insert.php" method="post" name="form1"onsubmit="return validate()">
<?php 
session_start();
if(isset($_SESSION['a']))
{
echo $_SESSION['a'];
}
?>
<table>
<tr><td></td></table>

    <table align="center" boarder="1"  width="450" height="450">
<table boarder="1"  align="center"  width="450" height="450">
<table boarder="1"  align="center"  width="450" height="450">
<table boarder="1"  align="center"  width="450" height="450">
<tr><td align="center"><h1>supplier<h1></td></tr>
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
<td><input type="submit" value="submit">
</td>
</tr>
</table>
</form>
<table>

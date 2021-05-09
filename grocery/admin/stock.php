<head>
<marquee onmouseover="this.stop()" onmouseout="this.start()"><font color="#660000" ><h4>STOCK OF GROCERY SHOP MANAGEMENT SYSTEM</h4></marquee>
<?php
include('header.php');
?>
<head>
<script>
function validate()
{
if(document.form1.n.value=="")
{
alert("plz enter product name");
return false;
}
else if(document.form1.d.value=="")
{
alert("plz enter your descroption");
return false;
}
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
<body>
<form action="stock_insert.php" method="post" name="form1"onsubmit="return validate()">
<?php 
session_start();
if(isset($_SESSION['a']))
{
echo $_SESSION['a'];
}?>
<table>
<tr><td></td></table>

    <table align="center" boarder="1"  width="450" height="450">
<table boarder="1"  align="center"  width="450" height="450">
<table boarder="1"  align="center"  width="450" height="450">
<tr><td align="center"><h1>product type<h1></td></tr>
<tr>
<td>name</td>
<td><input type="text" name="n"/>
</td>
</tr>
<tr>
<td>description</td>
<td><textarea cols="" name="d"/></textarea>
</td>
</tr>
<td></td>
<td><input type="submit" value="submit">
</td>
</tr>
</tr></table>
</form>
<?php
include('footer.php');
?>
</body>
</html>


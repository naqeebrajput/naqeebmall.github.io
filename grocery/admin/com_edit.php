<marquee onmouseover="this.stop()" onmouseout="this.start()"><font color="#660000" ><h4> company edit OF GROCERY SHOP MANAGEMENT SYSTEM</h4></marquee>
<?php
include('header.php');
?>
<?php
$id=$_REQUEST['id'];
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"grocery");
 $q="select*from company where id=$id";
$r=mysqli_query($con,$q);
$row=mysqli_fetch_array($r);
?>
<me ta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<body background="picture/imagesH41YDFW9.jpg">
<form action="com_update.php" method="post" name="form1"onsubmit="return validate()">
<input type="hidden"name="id"value="<?php echo $id?>"/>
<?php 
session_start();
if(isset($_SESSION['a']))
{
echo $_SESSION['a'];
}
?>
<table boarder="1"  align="center"  width="450" height="450">
<tr><td align="center"><h1>Add items<h1></td></tr>
<tr>
<td>product Name </td>
<td><input type="text"name="n" />
</td>
</tr>
<tr>
<td>Quantity</td>
<td><input type="text"name="e" />
</td>
</tr>
<tr>
<td>price</td>
<td>
<input type="text" name="d" />
</td></tr>
<tr>
<td>date</td>
<td><input type="date"name="ad" />
</td>
</tr>
<tr>
<td></td>
<td><input type="submit" value="submit">
</td>
</tr>
</table>
</form>
<?php
include('footer.php')
?>

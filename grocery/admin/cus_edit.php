<marquee onmouseover="this.stop()" onmouseout="this.start()"><font color="#660000" ><h4> customer edit OF GROCERY SHOP MANAGEMENT SYSTEM</h4></marquee>
<?php
include('header.php');
?>
<?php
$id=$_REQUEST['id'];
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"grocery");
 $q="select*from customer where id=$id";
$r=mysqli_query($con,$q);
$row=mysqli_fetch_array($r);
?>
<me ta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<body background="picture/imagesH41YDFW9.jpg">
<form action="cus_update.php" method="post" name="form1"onsubmit="return validate()">
<input type="hidden"name="id"value="<?php echo $id?>"/>
<?php 
session_start();
if(isset($_SESSION['a']))
{
echo $_SESSION['a'];
}
?>
<table boarder="1"  align="center">
<td align="center"><h1>customer<h1></td>
<tr>
<td>Name</td>
<td><input type="text"name="n"value="<?php echo $row['name'];?>" />
</td>
</tr>
<tr>
<td>email</td>
<td><input type="text"name="e" value="<?php echo $row['email'];?>"/>
</td>
</tr>
<tr>
<td>mobile</td>
<td>
<input type="text" name="d"  value="<?php echo $row['mobile'];?>" />
</td></tr>
<tr>
<td>address</td>
<td><input type="text"name="ad"  value="<?php echo $row['address'];?>" />
</td>
</tr>
 <tr>
    <td>city</td>
    <td><input type="text" name="p"  value="<?php echo $row['city'];?>"/></td>
  </tr>
<tr>
<td></td>
<td><input type="submit" value="submit">
</td></tr></table>
</form>
<?php
include('footer.php');
?>
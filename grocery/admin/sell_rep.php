
<table align="center" cellspacing="13" vspace="23" bordercolor="#330000" border="1" >
<head>
<?php
include('header.php');

?>
<table>
<table>
<table align="center" width="50%" border="20" bordercolor="#000033" >


<tr>
<th>id</th>
<th>customers</th>
<th>select_product</th>
<th>price</th>
<th>product_quntati</th>
<th> picture</th>
<th>date</th>

<th>description</th>
<th>action</th>
<?php
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con, "grocery");
$q="select * from sell";
$r=mysqli_query($con,$q);
$sr=1;
while($row=mysqli_fetch_array($r))
{
?>
<tr>
<td><?php echo $sr++?></td>
<td><?php echo $row['customers '];?></td>
<td><?php echo $row['product'];?></td>
<td><?php echo $row['price'];?></td>
<td><?php echo $row['quntati'];?></td>

<td><?php echo $row['date'];?></td>
<td><?php echo $row['description'];?></td>
<td><img src="picture/<?php echo $row['picture'];?>" width="70"height="70"></td>
<td><a href="sell_del.php?id=<?php echo $row['id'];?>">delete</a></td>
</tr>
<?php
}
?>

</table>
<?php
include('footer.php');

?>
</body>
</html>
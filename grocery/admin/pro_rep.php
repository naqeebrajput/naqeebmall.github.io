<head>
<?php
include('header.php');

?>
<table>
<table>
<table align="center" width="50%" border="20" bordercolor="#000033" >


<tr>
<th>id</th>
<th>name</th>
<th>price</th>
<th>product_quntati</th>
<th>date</th>
<th> picture</th>

<th>action</th>
<?php
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con, "grocery");
$q="select * from product";
$r=mysqli_query($con,$q);
$sr=1;
while($row=mysqli_fetch_array($r))
{
?>
<tr>
<td><?php echo $sr++?></td>
<td><?php echo $row['name'];?></td>
<td><?php echo $row['price'];?></td>
<td><?php echo $row['product_quntati'];?></td>
<td><?php echo $row['date'];?></td>
<td><img src="picture/<?php echo $row['picture'];?>" width="100px" height="100px" /> </td>


<td><a href="pro_del.php?id=<?php echo $row['id'];?>">delete</a></td>
</tr>
<?php
}
?></table>
<?php
include('footer.php');
?>
</body>
</html>

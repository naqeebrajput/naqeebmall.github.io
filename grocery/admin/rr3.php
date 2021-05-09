<?php
include('header.php');

?><table>
<table>
<table border="1px"  style="margin-top:20px" align="center" width="450">
<tr>
<th>sr no</th>
<th> Name</th>
<th> price</th>
<th> date</th>
<th>picture</th>
<?php
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con, "grocery");
$q="select * from item";
$r=mysqli_query($con,$q);
$sr=1;
while($row=mysqli_fetch_array($r))
{
?>
</tr>
<tr>
<td><?php echo $sr++?></td>
<td><?php echo $row['name'];?></td>
<td><?php echo $row['price'];?></td>
<td><?php echo $row['date'];?></td>
<td><img src="PICTURE/<?php echo $row['picture'];?>" /> </td>
<td><a href="pro_del.php?id=<?php echo $row['id'];?>">delete</a></td>
</tr>
<?php
}
?>
</table>
<?php
include('footer.php');

?>
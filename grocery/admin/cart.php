<head>
<marquee onmouseover="this.stop()" onmouseout="this.start()"><font color="#660000" ><h4>company REPORT OF GROCERY SHOP MANAGEMENT SYSTEM</h4></marquee>
<?php
include('header.php');
?>

<table>
<tr><td></td></table>
<table boarder="1"  align="center"  width="450" height="450">
<table boarder="1"  align="center"  width="450" height="450">
<table align="center" cellspacing="13" vspace="23" bordercolor="#66CCFF" >
<tr>
<th>product id</th>
<th>price</th>

<th>action</th>
<?php
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con, "grocery");
$q="select * from sell";
$r=mysqli_query($con,$q);
$id=1;
while($row=mysqli_fetch_array($r))
{
?>
<tr>
<td><?php echo $id++; ?></td>
<td><?php echo $row['price'];?></td>
<td><a href="../../web/comp_del.php?id=<?php echo $row['id'];?>">delete</a></td>
<td><a href="../../web/com_edit.php?id=<?php echo $row['id'];?>">edit</a></td>

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

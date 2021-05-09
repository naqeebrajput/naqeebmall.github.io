<head>
<marquee onmouseover="this.stop()" onmouseout="this.start()"><font color="#FFFFFF" ><h4>STOCK REPORT OF GROCERY SHOP MANAGEMENT SYSTEM</h4></marquee>
<?php
include('header.php');
?>

<table>
<tr><td></td></table>

    <table align="center" boarder="1"  width="450" height="450">
<table   align="center"  width="450" height="450">
<table   align="center"  width="450" height="450">
<table  align="center"  width="450" height="450">

<table align="center" cellspacing="13" vspace="23" bordercolor="#000000" >
<tr>
<th>id</th>
<th>name</th>
<th>description</th>
<th>action</th>
<?php
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con, "grocery");
$q="select * from stock";
$r=mysqli_query($con,$q);
$id=1;
while($row=mysqli_fetch_array($r))
{
?>
<tr>
<td><?php echo $id++; ?></td>
<td><?php echo $row['name'];?></td>
<td><?php echo $row['description'];?></td>

<td> <a onClick="return confirm('are u sure want to delete')" href="stock_del.php?id=<?php echo $row['id'];?>">Delete</a></td>

<td><a href="stock_edit.php?id=<?php echo $row['id']; ?>"> Edit</a></td>
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


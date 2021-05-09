<?php
include('header.php');

?>>


<table>
<form action="sell_insert.php" method="post" name="form1"onsubmit="return validate()">
<table  align="center"  width="450" height="450">
<td colspan="2"><h1>sell FORM<h1></td>
<tr>
<td><h4>customers </h4></td>
<td><input type="text"name="ad"></td>
</tr>
<tr>
<td> productname</td>
<td><select name="n" >
<option>colifollwer</option>
<option>oils</option>
<option>furits</option>
<option>cerilakes </option>
<option>jams </option>
<option>Refreshments </option>
<option>cleaners </option>
<option></option>
</select>
</td>
</tr>
<tr>
<td>price</td>
<td><select name="e" >
<option>100</option>
<option>200</option>
<option>300</option>
<option>400</option>
<option>500</option>
<option>600</option>
<option>700</option>
<option>800</option>
<option>100</option>
</select>
</td>
</tr>
<tr>
<td><h4>quntati</h4></td>
<td><input type="text"name="add"></td>
</tr>
 
  <tr>
<td><h4>date</h4></td>
<td><input type="date"name="d"></td>
</tr>
<tr>
<td><h4>description</h4></td>
<td><textarea cols="21" rows="7" name="de"> </textarea></td>
</tr>
<tr>
  <td>pic</td>
  <td><input type="file" name="pic"/></td>
  </tr>
<tr>
<td><td>
<td><input type="submit"value="submit" />
</td></tr>

</table>

<table align="center" cellspacing="13" vspace="23" bordercolor="#330000" border="1" >
<head>

<table>
<table>
<table align="center" width="50%" border="20" bordercolor="#000033" >


<tr>
<th>id</th>
<th>customers</th>
<th>productname</th>
<th>price</th>
<th>quntati</th>
<th>date</th>
<th>description</th>
<th> picture</th>
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
<td><?php echo $row['customers'];?></td>
<td><?php echo $row['productname'];?></td>
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

?>

</form>
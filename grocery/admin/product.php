<?php
include('header.php');

?><head>


<table>
<form action="pro_insert.php" method="post" name="form1"onsubmit="return validate()">
<table  align="center"  width="450" height="450">
<td colspan="2"><h1>PRODUCT FORM<h1></td>
<tr>
<td> name</td>
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
<td><h4>product_quntati</h4></td>
<td><input type="text"name="ad"></td>
</tr>
<td><h4>date</h4></td>
<td><input type="date" name="de"/></td>
</tr>
 <tr>
  <td>pic</td>
  <td><input type="file" name="pic" value="pic"/></td>
  </tr>
<tr>
<tr>
<td><input type="submit"value="submit" />
</td></a>
</tr></table></form>
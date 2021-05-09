<head>
<?php
include('header.php');
?>
<?php
$id=$_REQUEST['id'];
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"grocery");
 $q="select*from stock where id=$id";
$r=mysqli_query($con,$q);
$row=mysqli_fetch_array($r);
?>
<form action="stock_update.php" method="post" name="form1"onsubmit="return validate()">
<input type="hidden"name="id"value="<?php echo $id?>"/>
<table>
<tr><td></td></table>

    <table align="center" boarder="1"  width="450" height="450">
<table boarder="1"  align="center"  width="450" height="450">
<table boarder="1"  align="center"  width="450" height="450">
<tr><td align="center"><h1>stock<h1></td></tr>
<tr>
<td>name</td>
<td><input type="text" name="n"/>
</td>
</tr>
<tr>
<td>description</td>
<td><input type="text" name="d"/>
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


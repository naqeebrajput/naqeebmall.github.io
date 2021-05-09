<body background="../picture/red-fruit-and-vegetables-from-above.jpg">
<?php
include('header2.php');

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<table align="center" bgcolor="#CCCC66">
<?php
			if(isset($_REQUEST['msg']) && $_REQUEST['msg']==1){
			
			echo "record has not found";}
		?>
		<p><h3><font color="#009900">contact</font></h3></p>
<img src="New folder/mmm.PNG" align="right">
<table align="center" boarder="2" width="100" height="100" >



<tr align="right">
<td><h4>Name</h4></td>
<td><input type="text"name="n">
</td>
</tr>
<tr>
<td><h4>Email</h4></td>
<td><input type="text"name="e">
</td>
</tr>
<tr>
<tr>
<td><h4>password</h4></td>
<td><input type="password"name="e">
</td>
</tr>
<tr>
<td><h4>company</h4></td>
<td>
<input type="text" name="c" />
</td></tr>
<tr>
<td><h4>massage</h4></td>
<td><input type="text box"name="mass">
</td>
</tr>
<tr>
<td><h4>Moblie</h4></td>
<td><input type="text"name="m">
</td>
</tr>
</tr>
<td><a href=""><input type="button"value="submit"></td>
</td>
</table>
 
</body>
</html>
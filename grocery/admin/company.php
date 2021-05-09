<marquee onmouseover="this.stop()" onmouseout="this.start()"><font color="#660000" ><h4>company  OF GROCERY SHOP MANAGEMENT SYSTEM</h4></marquee>
<?php
include('header.php')
?>
<script>
function validate()
{
if(document.form1.n.value=="")
{
alert("plz enter your name");
return false;
}
else if(document.form1.e.value=="")
{
alert("plz enter your quntanty");
return false;
}
else if(document.form1.d.value=="")
{
alert("plz enter your price");
return false;
}
else if(document.form1.ad.value=="")
{
alert("plz enter date");
return false;
}
else if(document.form1.p.value=="")
{
alert("plz enter city");
return false;
}
else
{
return true;
}
}
</script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<body background="picture/imagesH41YDFW9.jpg">
<form action="comp_insert.php" method="post" name="form1"onsubmit="return validate()">

<?php
			if(isset($_REQUEST['msg']) && $_REQUEST['msg']==1){
			
			echo "Record has been inserted successfully";
			}
			if(isset($_REQUEST['msg']) && $_REQUEST['msg']==2){
			
			echo "Record has been inserted successfull";
			}
			
			if(isset($_REQUEST['msg']) && $_REQUEST['msg']==3){
			
			echo "Record has duplicated";
			}
			?>
<table>
<table>
<table boarder="1"  align="center"  width="450" height="450">
<tr><td align="center"><h1>Add items<h1></td></tr>
<tr> <img src="picture1/U5dtHNcguthU7tKWRD8FEMNg5hzUdVR.gif" width="490 " height="2000" align="right"/>
<td>product Name </td>
<td><input type="text"name="n" />
</td>
</tr>
<tr>
<td>Quantity</td>
<td><input type="text"name="e" />
</td>
</tr>
<tr>
<td>price</td>
<td>
<input type="text" name="d" />
</td></tr>
<tr>
<td>date</td>
<td><input type="date"name="ad" />
</td>
</tr>
<tr>
<td></td>
<td><input type="submit" value="submit">
</td>
</tr>
</table>
</form>
<?php
include('footer.php')
?>

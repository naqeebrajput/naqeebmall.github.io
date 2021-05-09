<head>
<marquee onMouseOver="this.stop()" onMouseOut="this.start()"><font color="#FFFFFF" ><h4>WOKERS OF GROCERY SHOP MANAGEMENT SYSTEM</h4></font></marquee>
<?php
include('header.php');
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
alert("plz enter your email");
return false;
}
else if(document.form1.e.value!='')
{
var emailid = document.form1.e.value;
var atpos = emailid.indexOf("@");
var dotpos=emailid.lastIndexOf(".");
if(atpos<1 || dotpos==atpos+3 || dotpos+2>=emailid.length)
{
alert("Not valid email");
return false;
}
}
 if(document.form1.d.value=="")
{
alert("plz enter your mobile");
return false;
}
else if(document.form1.ad.value=="")
{
alert("plz enter address");
return false;
}
else if(document.form1.am.value=="")
{
alert("plz enter salary");
return false;
}else if(document.form1.p.value=="")
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
<body >
<form action="cus_insert.php" method="post" name="form1"onsubmit="return validate()">
<?php 
session_start();
if(isset($_SESSION['a']))
{
echo $_SESSION['a'];
}
?>
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
<tr><td></td></table>
<table   align="center"  width="350" height="450">
<table   align="center"  width="350" height="450">
<table  align="center"  width="350" height="450">
<table align="center" cellspacing="13" vspace="23" bordercolor="#330000" border="1" >
	<tr><td><h1>Add employee</h1></td></tr>
<tr align="center"><img src="picture1/images (15).jpg"" width="350 " height="2000" align="right"/>
<td>Name</td>
<td><input type="text"name="n" />
</td>
</tr>
<tr>
<td>email</td>
<td><input type="text"name="e" />
</td>
</tr>
<tr>
<td>mobile</td>
<td>
<input type="text" name="d" />

</td></tr>
<tr>
<td>address</td>
<td><input type="text"name="ad" />
</td>
</tr>
<tr>
<td>salary</td>
<td><input type="text"name="am" />
</td>
</tr>
 <tr>
    <td>city</td>
    <td><input type="text" name="p"/></td>
  </tr>
<tr>
<td></td>
<td><input type="submit" value="ADd employe">
</td>
</tr>
</table>
</form>
<?php
include('footer.php');
?>
</body>
</html>


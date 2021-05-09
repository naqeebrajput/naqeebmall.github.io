<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Grocery shop mangement saystem</title>
</head>

<body>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>my first page</title>

<style>
ul {
list-style-type: none;
margin:0;
padding:0;
overflow:hidden;
background-color:#660033;
}
li {
float:left;
}
li a {
display:block;
color:#660033;
text-align:center;
padding:14px 16px;
text-decoration:none;
background-color:#660033;
}
li a,.dropbtn {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
	
}
/* change the link color to #111 (black) on hover*/
li a:hover {
background-color:#99FF99;
}
.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    
    z-index: 1;
}
.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}
</style>
<p align="center"><h1><font color="#009900">Grocery shop mangement system</font></h1></p>
<body>
<div>
<ul>
<li><a href="">home</a></li>
<li><a href="About.php">About us</a></li>
<li><a href="login.php">login</a></li>
<li><a href="contact us.php">contact us</a></li>
</ul>
</div>

</table><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<body bgcolor="#FFFFFF">
<form action="r.php" method="post" enctype="multipart/form-data">
<?php
			if(isset($_REQUEST['msg']) && $_REQUEST['msg']==1){
			
			echo "record has not found";}
		?>
		<p><h3><font color="#009900">contact</font></h3></p>
<img src="New folder/mmm.PNG" align="right">
<table align="center" boarder="2" width="100" height="100" >
<tr>
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
<td><h4>company</h4></td>
<td>
<input type="text" name="c" />
</td></tr>
<tr>
<td><h4>massage</h4></td>
<td><input type="text"name="mass">
</td>
</tr>
<tr>
<td><h4>Moblie</h4></td>
<td><input type="text"name="m">
</td>
</tr>
</tr>
<td><a href="r.php"><input type="button"value="submit"></td>
</td>
<td><a href="login.php"><input type="button"value="Reset"></td>
</td></tr></table>
<td align="left"> 
</body>
</html>
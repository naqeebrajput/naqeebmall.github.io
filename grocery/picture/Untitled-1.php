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
<body bgcolor="#FFFFFF">
<div>
<ul>
<li><a href="defualt.php">home</a></li>
<li><a href="About.php">About us</a></li>
<li><a href="adminstration.php">adminstration</a></li>
<li><a href="Report.php">Report</a></li>
<li><a href="My Account.php">My Accpunt</a></li>
<li><a href="Change password">change password</a></li>
<li><a href="logout.php">logout</a></li>
</ul>
</div>

</table>
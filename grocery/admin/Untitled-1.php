<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style>
	ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #000;
}

li {
    float: left;
}

li a,.dropbtn {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
	
}

/* Change the link color to #111 (black) on hover */
li a:hover {
    background-color: #0099CC;
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
</head>

<body>
<div>
<ul>
  <li><a href="default.asp">Home</a></li>
   <li class="dropdown">
    <a href="#" class="dropbtn">Category</a>
    <div class="dropdown-content">
      <?php 
	  		$q="select * from ctegory";
			$r=mysqli_query($con,$q);
			while($row=mysqli_fetch_array($r))
			{
	  		
	  ?>
	  <a href="#"><?php echo $row['aboutus']; ?></a>
	  
	  <?php }?>
	  
          </div>
  </li>
  <li><a href="contact.php">Contact</a></li>
  <li><a href="about.php">About</a></li>
</ul>
</div>


</body>
</html>
untitled-1
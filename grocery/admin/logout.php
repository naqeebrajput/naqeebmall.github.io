<head>
<marquee onmouseover="this.stop()" onmouseout="this.start()"><font color="#660000" ><h4>SUPPLIER REPORT OF GROCERY SHOP MANAGEMENT SYSTEM</h4></marquee>
<link rel="stylesheet"  href="../../zoyaaa/High Fashion Free Website Template - Free-CSS.com/high-fashion/stylesheets/foundation.min.css" >
<link rel="stylesheet" href="../../zoyaaa/High Fashion Free Website Template - Free-CSS.com/high-fashion/stylesheets/main.css">
<link rel="stylesheet" href="../../zoyaaa/High Fashion Free Website Template - Free-CSS.com/high-fashion/stylesheets/app.css">
</head>
<body>
<div  style="background:#660033"  class="row page_wrap">
  <divs style="background:#660033">
    <div>
      <div  style="background:#660033"class="nine columns header_nav">
        <ul style="background:#660033" class="nav-bar horizontal">
          <li class="has-flyout" > <a href="#"><font color="#FFFFFF">Addminstration</font></a><a href="#" class="flyout-toggle"></a>
            <ul class="flyout">
              <li class="has-flyout"><a href="register.php" >Register</a></li>
              <li class="has-flyout"><a href="sell.php">sell</a></li>
              <li class="has-flyout"><a href="stock.php">stock</a></li>
              <li class="has-flyout"><a href="company.php">company</a></li>
              <li class="has-flyout"><a href="supplier.php">supplier</a></li>
            </ul>
          </li>
          <li class="has-flyout"> <a href="#"><font color="#FFFFFF">report</font></a><a href="#" class="flyout-toggle"></a>
		  <ul class="flyout">
              <li class="has-flyout"><a href="reg_rep.php">register</a></li>
              <li class="has-flyout"><a href="sell_rep.php">sell</a></li>
              <li class="has-flyout"><a href="stock_rep.php">stock</a></li>
              <li class="has-flyout"><a href="company_rep.php">company</a></li>
              <li class="has-flyout"><a href="supplier_rep.php">supplier</a></li>
        </ul>
		
		 <li><a href="logout.php"><font color="#FFFFFF">logout</font></a><a href="logout.php"class="flyout-toggle"></a></li>
        <script>$('ul#menu-header').nav-bar();</script>
<!-- end page wrap) -->
<!-- Included JS Files (Compressed) -->
<script src="../../zoyaaa/High Fashion Free Website Template - Free-CSS.com/high-fashion/javascripts/foundation.min.js"></script>
<!-- Initialize JS Plugins -->
<script src="../../zoyaaa/High Fashion Free Website Template - Free-CSS.com/high-fashion/javascripts/app.js"></script>
</body>
<body bgcolor="#00FFCC">
<form action="r.php" method="post" enctype="multipart/form-data">
<?php
			if(isset($_REQUEST['msg']) && $_REQUEST['msg']==1){
			
			echo "record has not found";}
			?>
			
    <table align="center" boarder="1"  width="450" height="450">
<table   align="center"  width="450" height="450">
<table   align="center"  width="450" height="450">
<table  align="center"  width="450" height="450">
<table align="center" cellspacing="13" vspace="23" bordercolor="#330000" border="1" >
<table align="center" boarder="2" width="400" height="200" >
<tr><td><h1>LOGOUT</h1></td></tr>
<tr>
<td>Email</td>
<td><input type="text"name="e">
</td>
</tr>
<tr>
<td>Pasaword</td>
<td><input type="password"name="p">
</td></tr>
<td><a href="home.php"><input type="button"value="submit"></td>
</td>
<td><a href="login.php"><input type="button"value="Reset"></td>
</td></tr></table>

</body>
</html>
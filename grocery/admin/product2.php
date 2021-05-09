<head>
<marquee onmouseover="this.stop()" onmouseout="this.start()"> <font color="#660000" ><h4> GROCERY SHOP MANAGEMENT SYSTEM</h4></marquee>
<link rel="stylesheet"  href="../../grocery2/zoyaaa/High Fashion Free Website Template - Free-CSS.com/high-fashion/stylesheets/foundation.min.css" >
<link rel="stylesheet" href="../../grocery2/zoyaaa/High Fashion Free Website Template - Free-CSS.com/high-fashion/stylesheets/main.css">
<link rel="stylesheet" href="../../grocery2/zoyaaa/High Fashion Free Website Template - Free-CSS.com/high-fashion/stylesheets/app.css">
</head>
<body>
<div  style="background:#660033"  class="row page_wrap">
  <divs style="background:#660033">
    <div>
      <div  style="background:#660033" class="nine columns header_nav">
        <ul style="background:#660033" class="nav-bar horizontal">
          <li class="has-flyout" > <a href="#"><font color="#FFFFFF">Addminstration</font></a><a href="#" class="flyout-toggle"></a>
            <ul class="flyout">
              <li class="has-flyout"><a href="../../grocery2/grocery/admin/register.php" >Register</a></li>
              <li class="has-flyout"><a href="../../grocery2/grocery/admin/sell.php">sell</a></li>
              <li class="has-flyout"><a href="../../grocery2/grocery/admin/stock.php">stock</a></li>
              <li class="has-flyout"><a href="../../grocery2/grocery/admin/company.php">company</a></li>
              <li class="has-flyout"><a href="../../grocery2/grocery/admin/supplier.php">supplier</a></li>
			   <li class="has-flyout"><a href="../../grocery2/grocery/admin/customer.php">customer</a></li>
			     <li class="has-flyout"><a href="../../grocery2/grocery/admin/product2.php">product</a></li>
            </ul>
          </li>
          <li class="has-flyout"> <a href="#"><font color="#FFFFFF">report</font></a><a href="#" class="flyout-toggle"></a>
		  <ul class="flyout">
              <li class="has-flyout"><a href="../../grocery2/grocery/admin/reg_rep.php">register</a></li>
              <li class="has-flyout"><a href="../../grocery2/grocery/admin/sell_rep.php">sell</a></li>
              <li class="has-flyout"><a href="../../grocery2/grocery/admin/stock_rep.php">stock</a></li>
              <li class="has-flyout"><a href="../../grocery2/grocery/admin/company_rep.php">company</a></li>
              <li class="has-flyout"><a href="../../grocery2/grocery/admin/supplier_rep.php">supplier</a></li>
			    <li class="has-flyout"><a href="../../grocery2/grocery/admin/cust_rep.php">customer</a></li>
        	    <li class="has-flyout"><a href="../../grocery2/grocery/admin/pro_rep.php">product</a></li>
        </ul>
		 <li><a href="../../grocery2/grocery/admin/home.php"><font color="#FFFFFF">logout</font></a><a href="../../grocery2/grocery/admin/home.php"class="flyout-toggle"></a></li>
        <script>$('ul#menu-header').nav-bar();</script>
<!-- end page wrap) -->
<!-- Included JS Files (Compressed) -->
<script src="../../grocery2/zoyaaa/High Fashion Free Website Template - Free-CSS.com/high-fashion/javascripts/foundation.min.js"></script>
<!-- Initialize JS Plugins -->
<script src="../../grocery2/zoyaaa/High Fashion Free Website Template - Free-CSS.com/high-fashion/javascripts/app.js"></script>
<body><form action="../../grocery2/grocery/admin/pro_insert.php" method="post" name="form1" onsubmit="return  validate()"><table align="center" width="70%" height="200">
<td colspan="2"><h1>ADD PRODUCT FORM<h1></td>
<tr>
<td><h4>product Name</h4></td>
<td><input type="text"name="n"></td>
</tr>
<tr>
<td><h4>select type</h4></td>
<td>
  <select name="e" >
    <option>mcs</option>
    <option>msc chemistry</option>
    <option>msc math</option>
    <option>msc english</option>
  </select></td>
</tr>
<tr>
<td><h4>select company</h4></td>
<td>
  <select name="c" >
    <option>mcs</option>
    <option>msc chemistry</option>
    <option>msc math</option>
    <option>msc english</option>
  </select></td></tr>
<tr>
<td><h4>product unit</h4></td>
<td><input type="text"name="ad"></td>
</tr>
<tr>
<td><h4>description</h4></td>
<td><textarea cols="21" rows="7" name="de"> </textarea></td>
</tr><tr>
<td><a href="r.php"><input type="submit"value="add" />
</td></a>
</tr></table></form>
</body>
</html>
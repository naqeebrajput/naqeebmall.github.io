<head>
<marquee onmouseover="this.stop()" onmouseout="this.start()"><font color="#660000" ><h4>REG REPORT OF GROCERY SHOP MANAGEMENT SYSTEM</h4></marquee>
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
			   <li class="has-flyout"><a href="customer.php">customer</a></li>
            </ul>
          </li>
          <li class="has-flyout"> <a href="#"><font color="#FFFFFF">report</font></a><a href="#" class="flyout-toggle"></a>
		  <ul class="flyout">
              <li class="has-flyout"><a href="reg_rep.php">register</a></li>
              <li class="has-flyout"><a href="sell_rep.php">sell</a></li>
              <li class="has-flyout"><a href="stock_rep.php">stock</a></li>
              <li class="has-flyout"><a href="company_rep.php">company</a></li>
              <li class="has-flyout"><a href="supplier_rep.php">supplier</a></li>
			    <li class="has-flyout"><a href="cust_rep.php">customer</a></li>

        </ul>
		 <li><a href="home.php"><font color="#FFFFFF">logout</font></a><a href="home.php"class="flyout-toggle"></a></li>
        <script>$('ul#menu-header').nav-bar();</script>
<!-- end page wrap) -->
<!-- Included JS Files (Compressed) -->
<script src="../../zoyaaa/High Fashion Free Website Template - Free-CSS.com/high-fashion/javascripts/foundation.min.js"></script>
<!-- Initialize JS Plugins -->
<script src="../../zoyaaa/High Fashion Free Website Template - Free-CSS.com/high-fashion/javascripts/app.js"></script>

      </div>
      <div class="three columns header_logo"> <img src="images/logo.png" alt=""> </div>
    </div>
    <!-- END Header -->
    <div style="clear: both"></div>
    <div id="container" style="width:99.5%; background: none; box-shadow: none; margin: 0.5% auto">
      <div class='box photo col2'> <a href="register.php"><img src="../picture/8.PNG"' alt=""></a> </div>
      <div class='box photo col2'> <a href="#"><img src='../picture/1.jpg' alt=""></a> </div>
      <div class='box photo col2'> <a href="#"><img src='../picture/Capture.PNG' alt=""></a> </div>
      <div class='box photo col2'> <a href="#"><img src='../picture/FILE_5a338a9f4f9331.jpg' alt=""></a> </div>
      <div class='box photo col2'> <a href="#"><img src='../picture/download (5).jpg' alt=""></a> </div>
      <div class='box photo col2'> <a href="#"><img src='../picture/images (1).jpg' alt=""></a> </div>
      <div class='box photo col2'> <a href="#"><img src='images/prod_thumb.png' alt=""></a> </div>
      <div class='box photo col2'> <a href="#"><img src='images/prod_thumb.png' alt=""></a> </div>
      <div class='box photo col2'> <a href="#"><img src='images/prod_thumb.png' alt=""></a> </div>
      <div class='box photo col2'> <a href="#"><img src='images/prod_thumb.png' alt=""></a> </div>
      <div class='box photo col2'> <a href="#"><img src='images/prod_thumb.png' alt=""></a> </div>
      <div class='box photo col2'> <a href="#"><img src='images/prod_thumb.png' alt=""></a> </div>
    </div>
    <!-- end Masonry container -->
    <div class="twelve columns">
      <ul id="menu3" class="footer_menu horizontal">
        <li ><a href="index.html">Home</a></li>
      </ul>
    </div>
    <script>$('ul#menu3').nav-bar();</script>
  </div>
</div>
<!-- end page wrap) -->
<!-- Included JS Files (Compressed) -->
<script src="javascripts/foundation.min.js"></script>
<!-- Initialize JS Plugins -->
<script src="javascripts/app.js"></script>
<!-- Masonry for galleries -->
<script src="javascripts/masonry.js"></script>
<script>
$(function () {
    var $container = $('#container');
    $container.imagesLoaded(function () {
        $container.masonry({
            itemSelector: '.box',
            isFitWidth: true,
            isAnimated: true
        });
    });
});
</script>
<!-- END Masonry -->
</body>
</html>
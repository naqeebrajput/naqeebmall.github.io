<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
<title>High Fashion | Galleries</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<link rel="stylesheet" href="stylesheets/foundation.min.css">
<link rel="stylesheet" href="stylesheets/main.css">
<link rel="stylesheet" href="stylesheets/app.css">
<script src="javascripts/modernizr.foundation.js"></script>
<!-- Google fonts -->
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Playfair+Display:400italic' rel='stylesheet' type='text/css' />
<!-- IE Fix for HTML5 Tags -->
<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>
<body>
<div class="row page_wrap">
  <!-- page wrap -->
  <div class="twelve columns">
    <!-- page wrap -->
    <div class="row">
      <div class="nine columns header_nav">
        <ul id="menu-header" class="nav-bar horizontal">
          <li><a href="index.html">Home</a></li>
          <li class="has-flyout"> <a href="#">Example Pages</a><a href="#" class="flyout-toggle"></a>
            <ul class="flyout">
              <li class="has-flyout"><a href="blog.html">Blog</a></li>
              <li class="has-flyout"><a href="blog-single.html">Blog Single Page</a></li>
              <li class="has-flyout"><a href="products-page.html">Products Page</a></li>
              <li class="has-flyout"><a href="product-single.html">Product Single</a></li>
              <li class="has-flyout"><a href="contact.html">Contact Page</a></li>
            </ul>
          </li>
          <li ><a href="galleries.html">Galleries</a></li>
        </ul>
        <script>$('ul#menu-header').nav-bar();</script>
      </div>
      <div class="three columns header_logo"> <img src="images/logo.png" alt=""> </div>
    </div>
    <!-- END Header -->
    <div style="clear: both"></div>
    <div id="container" style="width:99.5%; background: none; box-shadow: none; margin: 0.5% auto">
      <div class='box photo col2'> <a href="register"><img src="../picture/8.PNG"' alt=""></a> </div>
      <div class='box photo col2'> <a href="#"><img src='images/prod_thumb.png' alt=""></a> </div>
      <div class='box photo col2'> <a href="#"><img src='images/prod_thumb.png' alt=""></a> </div>
      <div class='box photo col2'> <a href="#"><img src='images/prod_thumb.png' alt=""></a> </div>
      <div class='box photo col2'> <a href="#"><img src='images/prod_thumb.png' alt=""></a> </div>
      <div class='box photo col2'> <a href="#"><img src='images/prod_thumb.png' alt=""></a> </div>
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
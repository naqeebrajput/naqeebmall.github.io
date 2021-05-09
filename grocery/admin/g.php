<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
<title>High Fashion | Products Page</title>
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
<?php
include('header.php');
?>
<table><table><table><table>
    <!-- END Header -->
    <div id="container" style="width:99.5%; background: none; box-shadow: none; margin: 0.5% auto">
      <!-- product box -->
      <div class='box photo col2'> <a href="pstock-s.php"><img src="../picture/New folder/6.PNG" alt=""></a>
        <p> cooli follower  </p>
        <p style='text-align:center; margin-bottom:12px'> <a href='pstock-s.php' class='button small secondary round'></a> </p>
      </div>
      <!-- product box -->
      <div class='box photo col2'> <a href="pstock-s1.php"><img src='../picture/general-grocery-247x280.jpg' alt=""></a>
        <p> oil </p>
        <p style='text-align:center; margin-bottom:12px'> <a href='pstock-s.php' class='button small secondary round'></a> </p>
      </div>
      <!-- product box -->
      <div class='box photo col2'> <a href="pstock-s2.php"><img src='../picture/dda592c4515e3a864b7161e9fcd72c1a.jpg' alt=""></a>
        <p> furits </p>
        <p style='text-align:center; margin-bottom:12px'> <a href='pstock-s.php' class='button small secondary round'></a> </p>
      </div>
      <!-- product box -->
      <div class='box photo col2'> <a href="pstock-s4.php"><img src='../picture/Nestle-Cerelac-Wheat-grocery-online.jpg' alt=""></a>
        <p> cerilakes </p>
        <p style='text-align:center; margin-bottom:12px'> <a href='pstock-s.php' class='button small secondary round'></a> </p>
      </div>
      <!-- product box -->
      <div class='box photo col2'> <a href="pstock-s8.php"><img src='../picture/download (5).jpg' alt=""></a></p>
        <p> grocerys </p>
        <p style='text-align:center; margin-bottom:12px'> <a href='pstock-s.phpl' class='button small secondary round'>/a> </p>
      </div>
      <!-- product box -->
      <div class='box photo col2'> <a href="pstock-s5.php"><img src='../picture/3.PNG' alt=""></a>
       
        <
      </div>
      <!-- product box -->
      <div class='box photo col2'> <a href="pstock-s6.php"><img src='../picture/71Fi3EzVq2L._SX355_.jpg' alt=""></a>
      
      </div>
      <!-- product box -->
      <div class='box photo col2'> <a href="pstock-s7.php"><img src='../picture/download (5).jpg' alt=""></a>
      
      </div>
    </div>
	<td><a href=""/><input type="button" name="back"/></td>
    <!-- end Masonry container -->
    <div class="row">
      <div class="twelve columns">
        <ul id="menu3" class="footer_menu horizontal">
          <li ><a href="index.html">Home</a></li>
        </ul>
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
  </div>
  <!-- END page wrap -->
</div>
<!-- END page wrap -->
</body>
</html>

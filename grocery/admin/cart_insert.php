<?php
echo $name=$_POST['n'];
echo $price=$_POST['d'];
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"grocery");
 $q="insert into sell (name,price,date)values('$name','$price','$date')";
mysqli_query($con,$q);
//header("location:cart.php");
?>


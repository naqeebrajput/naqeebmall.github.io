<?php
echo '<br>'.$name=$_POST['n'];
echo '<br>'.$price=$_POST['e'];
echo '<br>'.$Quantity=$_POST['q'];
echo '<br>'.$date=$_POST['d-m-y'];

$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"grocery");
echo $q="insert into rida (name,price,Quantity ,date) values ('$name','$price', '$Quantity','$date')";
mysqli_query($con, $q);
header("location:kkk.php")
?>




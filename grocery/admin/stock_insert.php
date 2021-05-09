<?php
echo $name=$_POST['n'];
 echo $description=$_POST['d'];
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"grocery");
 $q="insert into stock (name,description)values('$name','$description')";
mysqli_query($con,$q);
header("location:stock.php");
?>


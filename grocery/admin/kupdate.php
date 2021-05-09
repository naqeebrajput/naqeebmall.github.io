<?php
echo $id=$_REQUEST['id'];
 echo $name=$_POST['n'];
 echo $price=$_POST['e'];
echo $Quantity=$_POST['q'];
echo $date=$_POST['d-m-y'];

$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"grocery");
$q="update  company set name='$name',price='$price',Quantity='$Quantity',date='$date', where id=$id";
mysqli_query($con,$q);
header("Location:kk2.php");
?>
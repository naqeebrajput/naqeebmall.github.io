<?php
echo $id=$_REQUEST['id'];
 echo $name=$_POST['n'];
echo $Quantity=$_POST['e'];
echo $price=$_POST['d'];
echo $date=$_POST['ad'];
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"grocery");
$q="update  company set name='$name',Quantity='$Quantity',price='$price',date='$date' where id=$id";
mysqli_query($con,$q);
header("Location:company_rep.php");
?>

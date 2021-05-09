<?php
echo $name=$_POST['n'];
 echo $email=$_POST['e'];
 echo $mobile=$_POST['d'];
 echo $address=$_POST['ad'];
 echo $company=$_POST['am'];
 echo $city=$_POST['p'];
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"grocery");
 $q="insert into supplier(name,email,mobile,address,company,city)values('$name','$email','$mobile','$address','$company','$city')";
mysqli_query($con,$q);
header("location:supplier.php");
?>


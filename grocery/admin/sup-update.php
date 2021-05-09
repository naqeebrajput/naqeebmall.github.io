<?php
echo $id=$_REQUEST['id'];
echo $name=$_POST['n'];
 echo $email=$_POST['e'];
 echo $mobile=$_POST['d'];
 echo $address=$_POST['ad'];
 echo $company=$_POST['am'];
 echo $city=$_POST['p'];
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"grocery");
$q="update  supplier set name='$name',email='$email',mobile='$mobile',address='$address',company='$company',city='$city' where id=$id";
mysqli_query($con,$q);
header("Location:supplier_rep.php");
?>

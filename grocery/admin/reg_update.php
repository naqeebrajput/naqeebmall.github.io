<?php
echo $id=$_REQUEST['id'];
echo $name=$_POST['n'];
 echo $email=$_POST['e'];
 echo $mobile=$_POST['d'];
 echo $address=$_POST['ad'];
 echo $city=$_POST['p'];
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"grocery");
$q="update  register set name='$name',email='$email',mobile='$mobile',address='$address',city='$city' where id=$id";
mysqli_query($con,$q);
header("Location:reg_rep.php");
?>

<?php
echo $name=$_POST['n'];
 echo $email=$_POST['e'];
 echo $mobile=$_POST['d'];
 echo $address=$_POST['ad'];
 echo $city=$_POST['p'];
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"grocery");
$q="select*from customer where email='$email'";
$nm=mysqli_num_rows($r);
if($nm==0)
{
$q="insert into customer(name,email,mobile,address,company,city)values('$name','$email','$mobile','$address','$company','$city')";
mysqli_query($con,$q);
}
else 
{
header("location:customer.php?msg=3");
exit;
}
if(!sr)
{
header("location:customer.php?msg=2");
}
else{
//header("location:customer.php?msg=1");
}
?>


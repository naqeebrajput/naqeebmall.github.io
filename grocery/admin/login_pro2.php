<?php
echo $email=$_POST['e'];
echo $password=$_POST['p'];
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"grocery");
$q="select* from contect where email='$email' and password='$password'";
$r=mysqli_query($con,$q);
$nm=mysqli_num_rows($r);
if($nm==0)
{
header('location:login2.php?msg=1');
}
else
{
session_start();
$_SESSION['log']='log';
header('location:index-3.php');
}
?>


<?php
session_start();
echo $email=$_POST['n'];
echo $password=$_POST['pass'];
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"grocery");
$q="select* from admin where email='$email' and password='$password'";
$r=mysqli_query($con,$q);
$nm=mysqli_num_rows($r);
if($nm==0)
header("location:login.php?msg=1");
else
$_SESSION['login']='iqra';
header("location:home.php");
?>

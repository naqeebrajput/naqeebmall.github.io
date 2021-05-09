<?php
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'grocery');
$id=$_REQUEST['id'];
$q="select*from item where id=$id";
$r=mysqli_query($con,$q);	
$row=mysqli_fetch_array($r);
$q="delete from item where id=$id";
$r=mysqli_query($con,$q);
header("location:rr3.php");
?>

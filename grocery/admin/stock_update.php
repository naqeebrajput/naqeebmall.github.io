<?php
echo $id=$_REQUEST['id'];
echo $name=$_POST['n'];
echo $description=$_POST['d'];
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"grocery");
$q="update  sell set name ='$name',description='$description' where id=$id";
mysqli_query($con,$q);
header("Location:stock_rep.php");
?>

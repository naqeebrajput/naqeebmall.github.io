<?php
$id=$_REQUEST['id++'];
echo $product=$_POST['n'];
echo $price=$_POST['e'];
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con, "grocery");
mysqli_query($con, $q);
 $q="update stock set product='$product',price='$price' where id++='$id'";

$r=mysqli_query($con,$q);
if(!$r)
{
header("location:stock.php?msg=3");
}
else{
header("location:stock.php?msg=4");
}
?>

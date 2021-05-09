<?php
echo '<br>'. $name=$_POST['n'];
echo '<br>'. $price=$_POST['e'];
echo '<br>'. $product_quntati=$_POST['ad'];
$date=date('d-m-Y');
echo '<br>'. $picture=$_FILES['pic']['name'];
echo '<br>'. move_uploaded_file($_FILES['pic']['tmp_name'],'picture/'.$pic);
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"grocery");
echo $q="insert into product(name,price,product_quntati,date,picture)values('$name','$price' ,'$product_quntati' ,'$date', '$picture')";
mysqli_query($con,$q);
//header("location:product.php");
?>

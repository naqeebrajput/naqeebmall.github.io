<?php
echo '<br>'. $customes=$_POST['ad'];
echo '<br>'. $productname=$_POST['n'];
echo '<br>'. $price=$_POST['e'];
echo '<br>'. $quntati=$_POST['add'];
$date=date('d-m-Y');
echo '<br>'.$description=$_POST['de'];
echo '<br>'. $picture=$_FILES['pic']['name'];
move_uploaded_file($_FILES['pic']['tmp_name'],'picture/'.$pic);
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"grocery");
echo $q="insert into sell(customers , productname,price,quntati,date,description,picture)values('$customers ','$ productname','$price' ,'$quntati' ,'$date','$description', '$picture')";
mysqli_query($con,$q);
header("location:sell.php");
?>

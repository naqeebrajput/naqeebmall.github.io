<?php
echo '<br>'.$name=$_POST['n'];
echo '<br>'.$price=$_POST['e'];
echo '<br>'.$date=$_POST['d-m-y'];
echo '<br>'. $picture=$_FILES['pic']['name'];
move_uploaded_file($_FILES['pic']['tmp_name'],'picture/'.$pic);
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con, "grocery");
$q="insert into item (name,price, date, picture) values ('$name','$price','$date', '$picture')";
mysqli_query($con, $q);
header("location:rr2.php")
?>

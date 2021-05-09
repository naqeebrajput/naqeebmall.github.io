<?php
echo $name=$_POST['n'];
echo $Quantity=$_POST['e'];
echo $price=$_POST['d'];
echo $date=$_POST['ad'];
$con=mysqli_connect("localhost","root","");
$q="select*from company where name='$name'";
mysqli_select_db($con,"grocery");
mysqli_query($con,$q);

$r=mysqli_query($con,$q);
$nm=mysqli_num_rows($r);
if($nm==0)
{
$q="insert into company(name,Quantity,price,date)values('$name','$Quantity','$price','$date')";
mysqli_query($con,$q);
}
else 
{
header("location:company.php?msg=3");
exit;
}
if(!sr)
{
header("location:company.php?msg=2");
}
else{
//header("location:company.php?msg=1");
}
?>



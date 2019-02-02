<?php 
 $snumber=$_POST['snum'];
 // here feild same as registration page and we get data 
 $prod=$_POST['pname'];
 $order=$_POST['ordate'];
 $quantity=$_POST['quant'];
 $rate=$_POST['rate'];
 $discount=$_POST['dis'];
$amount=$quantity*$rate;
$disc=$amount*$discount/100;
$total=$amount-$disc;
 $conn=mysqli_connect('localhost','root','','children');
 $sql="INSERT INTO bill(serialno, product, orderno, quantity, rate, discount, amount, disc, total) VALUES ('$snumber','$prod','$order','$quantity','$rate','$discount','$amount','$disc','$total')";
 $run=mysqli_query($conn,$sql);
 if ($run) {
 	echo "Data inserted successfully";
 }
 else{
 	echo "Data not inserted";
 }

?>
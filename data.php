<?php 
 $snumber=$_POST['snum'];
 // here feild same as registration page and we get data 
 $prod=$_POST['pname'];
 $order=$_POST['ordate'];
 $quantity=$_POST['quant'];
 $rate=$_POST['rate'];
 $discount=$_POST['dis'];
$amount=$quantity*$rate;
$diss=$amount*$discount/100;
$total=$amount-$diss;
 echo date('d/m/y');

?>
<!DOCTYPE html>
<html>
<head>
	<title>Data</title>
</head>
<body>
 <table width="70%" cellpadding="10" border="5" align="center">
	<caption><h1>Show the information of your shoping.</h1></caption>
	<th>Sr.No</th>
	<th>Product name</th>
	<th>Order Date</th>
	<th>Quantity</th>
	<th>Rate</th>
	<th>Amount</th>
	<th>Discount</th>
	<th>Total</th>
	<tr>
		<td><?php echo $snumber; ?></td>
		<td><?php echo $prod; ?></td>
		<td><?php echo $order; ?></td>
		<td><?php echo $quantity ?></td>
		<td><?php echo $rate; ?></td>
		<td><?php echo $amount; ?></td>
		<td><?php echo $diss; ?></td>
		<td><?php echo $total; ?></td>
	</tr>
 </table>           
</body>
</html> 
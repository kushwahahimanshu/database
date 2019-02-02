<?php 
 $id=$_GET['id'];
 $conn=mysqli_connect('localhost','root','','pninfosys');
 $sql="select * from form where id='$id'";
 $run=mysqli_query($conn,$sql);
 while ($sun=mysqli_fetch_assoc($run)) {
 	$id=$sun['id']; 
	// here feild must have same as database
     $email=$sun['email'];
      $pasword=$sun['password'];
      $laddress=$sun['localaddress'];
      $paddress=$sun['parmanentaddress'];
      $city=$sun['city'];
      $state=$sun['state'];
      $pin=$sun['pin'];
 }
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>update page data</title>
</head>
<body>
	<center>
		<form action="updatepn.php" method="post">
			<h2>UPDATE DATA into FORM</h2>
			<table border="10" cellpadding="5" cellspacing="5">
				<tr>
					<th>your id</th><td><input type="text" name="id" value="<?php echo $id;?>"readonly></td>
				</tr>
				<tr>
					<th>your Email</th><td><input type="email" name="em" value="<?php echo $email;?>"></td>
				</tr>
				<tr>
					<th>your Password</th><td><input type="password" name="ps" value="<?php echo $pasword;?>"></td>
				</tr>
				<tr>
					<th>your Local Address</th><td><input type="text" name="laddress" value="<?php echo $laddress;?>"></td>
				</tr>
				<tr>
					<th>your parmanant address</th><td><input type="text" name="paddress" value="<?php echo $email;?>"></td>
				</tr>
				<tr>
					<th>your city</th><td><input type="text" name="city" value="<?php echo $city;?>"></td>
				</tr>
				<tr>
					<th>your State</th><td><input type="text" name="state" value="<?php echo $state;?>"></td>
				</tr>
				<tr>
					<th>your pin</th><td><input type="text" name="pin" value="<?php echo $pin;?>"></td>
				</tr>
				<tr><td><center><input type="submit" name="submit"></center></td></tr>
			</table>
			
		</form>
	</center>

</body>
</html>
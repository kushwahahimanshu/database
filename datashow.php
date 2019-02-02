<!DOCTYPE html>
<html>
<head>
	<title>Data show</title>
</head>
<body>
 <table width="70%" cellpadding="10" border="5" align="center">
	<caption><h1>Show the information of your database.</h1></caption><tr>
	<th>Id</th>
	<th>Email</th>
	<th>Password</th>
	<th>Local Address</th>
	<th>Parmanent</th>
	<th>City</th>
	<th>State</th>
	<th>Pin</th>
	<th>Update</th>
	<th>Delete</th>
<?php 
 $conn=mysqli_connect('localhost','root','','pninfosys');
 $sql="select * from form";
 $run=mysqli_query($conn,$sql);
 while ($show=mysqli_fetch_assoc($run)) {
 	?>
 	<tr>
 		<!-- field same as database -->
		<td><?php echo $show['id'];?></td>
		<td><?php echo $show['email'];?></td>
		<td><?php echo $show['password'];?></td>
		<td><?php echo $show['localaddress'];?></td>
		<td><?php echo $show['parmanentaddress'];?></td>
		<td><?php echo $show['city'];?></td>
		<td><?php echo $show['state'];?></td>
		<td><?php echo $show['pin'];?></td>
		<TD><a href="updatedatapn.php?id=<?php echo $show['id'];?>">Update</a></TD>
		<TD><a href="deletepn.php?id=<?php echo $show['id'];?>">Delete</a></TD>
	</tr>


 	<?php
 }
?>
 </table>           
</body>
</html>
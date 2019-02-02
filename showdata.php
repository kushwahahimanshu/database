<!DOCTYPE html>
<html>
<head>
	<title>Show data</title>
</head>
<body>
<table width="70%" cellpadding="10" border="5" align="center">
	<caption><h1>Your data</h1></caption><tr>
	<th>id</th>
	<th>Name</th>
	<th>Father name</th>
	<th>City</th>
	<th>Address</th>
    <th>Gender</th>
	<th>Password</th>
	<th>File</th>
	<th>Mobile</th>
</tr>
<?php 
$conn=mysqli_connect('localhost','root','','form1');
if ($conn) {
	echo "connection successful";
}
else{
	echo "failed to connection";
}
$sql="select * from student";
$run=mysqli_query($conn,$sql);
while ($result=mysqli_fetch_assoc($run)) {
	?>
	<tr>
		<td><?php echo $result['id'];?></td>
		<td><?php echo $result['name'];?></td>
		<td><?php echo $result['fathername'];?></td>
		<td><?php echo $result['city'];?></td>
		<td><?php echo $result['address'];?></td>
		<td><?php echo $result['gender'];?></td>
		<td><?php echo $result['password'];?></td>
		<td><?php echo $result['file'];?></td>
		<td><?php echo $result['mobile'];?></td>
	</tr>
	<br>
	<?php
}
?>
</table>
</body>
</html>

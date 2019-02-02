<!DOCTYPE html>
<html>
<head>
	<title>show</title>
</head>
<body>
<table width="70%" cellpadding="10" border="5" align="center">
	<caption><h1>Show Record From Database</h1></caption>
	<th>id</th>
	<th>name</th>
	<th>fname</th>
	<th>mobile</th>
	<th>email</th>
	<th>course</th>
	<th>collage</th>
	<th>city</th>
	<th>Delete</th>
	<th>Update</th>

<?php 
$conn=mysqli_connect('localhost','root','','practicedb');
if ($conn) {
	echo "connection success";
}
else{
	echo "connection failed";
}
$sql="select * from batch";
$run=mysqli_query($conn,$sql);
while ($result=mysqli_fetch_assoc($run)) {
	?>
	<tr align="center">
		<td><?php echo $result['id']; ?></td>
		<td><?php echo $result['name']; ?></td><!-- Here the feild like name,id are same as database feild -->
		<td><?php echo $result['Fathername']; ?></td>
		<td><?php echo $result['mobile']; ?></td>
		<td><?php echo $result['email']; ?></td>
		<td><?php echo $result['course']; ?></td>
		<td><?php echo $result['collage']; ?></td>
		<td><?php echo $result['city']; ?></td>
		<td><a href="updateshow.php?id=<?php echo $result['id'];?>">Update</a></td>
	    <td><a href="delete.php?id=<?php echo $result['id'];?>">Delete</a></td>
	</tr>
	<?php 
}

?>
</table>
</body>
</html>
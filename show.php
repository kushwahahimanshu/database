<!DOCTYPE html>
<html>
<head>
	<title>Show data</title>
</head>
<body>
<table width="70%" cellpadding="10" border="5" align="center">
	<caption><h1>Your data</h1></caption><tr>
	<th>id</th>
	<th>Title</th>
	<th>First name</th>
	<th>Last name</th>
	<th>Age</th>
    <th>Member</th>
	<th>Qualification</th>
	<th>Designation</th>
	<th>Institute</th>
</tr>

<?php 
$conn=mysqli_connect('localhost','root','','form2');
if ($conn) {
	echo "connection successful";
}
else{
	echo "failed to connection";
}
$sql="select * from s2";
$run=mysqli_query($conn,$sql);
// this query for execution of queries 
while ($result=mysqli_fetch_assoc($run)) { 
	// this query for fatch the data
?>
<tr>
		<td><?php echo $result['id'];?></td>
		<td><?php echo $result['title'];?></td>
		<td><?php echo $result['fname'];?></td>
		<td><?php echo $result['lname'];?></td>
		<td><?php echo $result['age'];?></td>
		<td><?php echo $result['member'];?></td>
		<td><?php echo $result['qualification'];?></td>
		<td><?php echo $result['designation'];?></td>
		<td><?php echo $result['institute'];?></td>
	</tr>
	<br>
	<?php
}
?>
</table>
</body>
</html>

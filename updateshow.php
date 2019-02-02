<?php 
echo $id=$_GET['id'];
$conn=mysqli_connect('localhost','root','','practicedb');
$sql="select * from batch where id='$id'";
$run=mysqli_query($conn,$sql);
while ($result=mysqli_fetch_assoc($run)) {
	$id=$result['id']; 
	// here feild must have same as database
    $name=$result['name'];
    $fname=$result['Fathername'];
    $mobile=$result['mobile'];
    $email=$result['email'];
    $course=$result['course'];
    $collage=$result['collage'];
    $city=$result['city'];
    // here we can get data from the database for the updation and we create form for getting this data
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>updatepage data</title>
</head>
<body>
	<center>
		<form action="update.php" method="post">
			<h2>UPDATED DATA FORM</h2>
			<table border="10" cellpadding="5" cellspacing="5">
				<tr>
					<th>your id</th><td><input type="text" name="id" value="<?php echo $id;?>"readonly></td>
				</tr>
				<tr>
					<th>your name</th><td><input type="text" name="nm" value="<?php echo $name;?>"></td>
				</tr>
				<tr>
					<th>your father name</th><td><input type="text" name="fm" value="<?php echo $fname;?>"></td>
				</tr>
				<tr>
					<th>your mobile no.</th><td><input type="number" name="mob" value="<?php echo $mobile;?>"></td>
				</tr>
				<tr>
					<th>your email id</th><td><input type="email" name="email" value="<?php echo $email;?>"></td>
				</tr>
				<tr>
					<th>your course</th><td><input type="text" name="course" value="<?php echo $course;?>"></td>
				</tr>
				<tr>
					<th>your collage</th><td><input type="text" name="collage" value="<?php echo $collage;?>"></td>
				</tr>
				<tr>
					<th>your city</th><td><input type="text" name="city" value="<?php echo $city;?>"></td>
				</tr>
				<tr><td><center><input type="submit" name="submit"></center></td></tr>
			</table>
			
		</form>
	</center>

</body>
</html>
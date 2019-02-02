<?php
$name=$_POST['nm'];
// here feild is same as first time create form feild
$fname=$_POST['fnm'];
$mobile=$_POST['mob'];
$email=$_POST['email'];
$course=$_POST['course'];
$collage=$_POST['collage'];
$city=$_POST['city'];

$conn=mysqli_connect('localhost','root','','practicedb');
if ($conn) {
	echo "connection success";
}
else{
	echo "connection failed";
}
$sql="INSERT INTO batch( name, Fathername, mobile, email, course, collage, city) VALUES ('$name','$fname','$mobile','$email','$course','$collage','$city')";
// this is a insert query
$run=mysqli_query($conn,$sql);
if ($run) {
	echo "Data submitted successfully";
	header('location:newshowdata.php');
}
else{
	echo "Data not  submitted";
}

?>
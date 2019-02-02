<?php 
$id=$_POST['id']; 
// here id,nm,etc.same as update form data field(i.e.updateshow.php page form field)
$name=$_POST['nm'];
$fname=$_POST['fm'];
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
$sql="update batch set name='$name', Fathername='$fname', mobile='$mobile', email='$email',course='$course',collage='$collage',city='$city' where id='$id' ";
 // this is a update query.
$run=mysqli_query($conn,$sql);
if ($run) {
	echo "Data update successfully";
	 header('location:newshowdata.php');
}
else{
	echo "data update failed";
}
 ?>
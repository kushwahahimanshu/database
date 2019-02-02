<?php 
$id=$_GET['id'];
$conn=mysqli_connect('localhost','root','','practicedb');
$sql=" delete from batch where id='$id' " or die(mysql_error());
// this is a delete query 
$run=mysqli_query($conn,$sql);
if ($run) {
	echo "record deleted";
	header('location:newshowdata.php');
}
else{
	echo "record delition failed ";
}
?>
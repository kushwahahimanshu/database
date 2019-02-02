<?php 
$nm=$_POST['nm'];
$fn=$_POST['fn'];
$dt=$_POST['dt'];
$city=$_POST['City'];
 $address=$_POST['add'];
 $gender=$_POST['gen'];
$password=$_POST['pass'];
$file=$_POST['file'];
$mobile=$_POST['num'];
$conn=mysqli_connect('localhost','root','','form1');
if ($conn) {
	echo "connection successful";
}
else{
	echo "failed to connection";
}
$sql="INSERT INTO student(name, fathername,dob,city,address,gender,password,file,mobile) VALUES ('$nm','$fn','$dt','$city','$address','$gender','$password','$file','$mobile')";
$run=mysqli_query($conn,$sql);
if ($run==true) {
	echo "Data submitted succesfully";
}
else
{
 echo "Data submition failed";
}
?>
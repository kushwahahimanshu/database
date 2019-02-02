<?php 
 $email=$_POST['email'];
 $password=$_POST['pass'];
 $local=$_POST['local'];
 $parmanent=$_POST['parmanent'];
 $city=$_POST['city'];
 $state=$_POST['state'];
 $pin=$_POST['pin'];
 
$conn=mysqli_connect('localhost','root','','pninfosys');
$sql="INSERT INTO form(email, password, localaddress, parmanentaddress, city, state, pin) VALUES ('$email','$password','$local','$parmanent','$city','state','$pin')"; 
$run=mysqli_query($conn,$sql);
if ($run) {
	echo "Data inserted into data base successfully";
	header("location:datashow.php");
}
else
{
	echo "Data Not Inserted";
}

 ?> 
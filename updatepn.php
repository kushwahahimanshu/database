<?php
$id=$_POST['id'];

$email=$_POST['em'];
$pass=$_POST['ps'];
$localadd=$_POST['laddress'];
$paradd=$_POST['paddress'];
$city=$_POST['city'];
$state=$_POST['state'];
$pin=$_POST['pin'];
 $conn=mysqli_connect('localhost','root','','pninfosys');
 $sql="update form set email='$email', password='$pass', localaddress='$localadd', parmanentaddress='$paradd', city='$city',state='$state',pin='$pin' where id='$id'";
 $run=mysqli_query($conn,$sql);
 if ($run) {
 	echo "Data update successfully";
 }
 else{
 	echo "data not updateSS";
 }
  ?>
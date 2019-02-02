<?php 
 $id=$_GET['id'];
 $conn=mysqli_connect('localhost','root','','pninfosys');
 $sql="delete from form where id='$id'";
 $run=mysqli_query($conn,$sql);
 if ($run) {
 	echo "Data has been deleted successful";
 }
 else{
 	echo "data not Deleted";
 }
 ?>
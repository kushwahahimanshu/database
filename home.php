<?php 
session_start();
if (isset($_SESSION['uid']) and isset($_SESSION['uname'])) {
$id=$_SESSION['uid'];
$username=$_SESSION['uname'];

// $id=$_GET['id'];
 $conn=mysqli_connect('localhost','root','','form1');
 $sql="select * from signup where id='$id'";
 $run=mysqli_query($conn,$sql);
 while ($sun=mysqli_fetch_assoc($run)) {
 	echo $id=$sun['id']; 
	// here feild must have same as database
   	     $email=$sun['email'];
    	  $pasword=$sun['password'];
     	 $uname=$sun['username'];
     	 $birth=$sun['birthday'];
     	 $mob=$sun['mobile'];
    	  $city=$sun['city'];
    }
?>

<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
</head>
<body>
<h1 align="center" style="color: blue;"> Welcome <?php echo $username; ?></h1>
<span style="color: blue;"><?php echo "User Id :".$id;?></span>
<a href="logout.php" style="margin-left: 1200px;  padding: 5px; color: red;">Logout</a>
<hr>
<span style="color: blue;"><?php echo "User Email :".$email;?></span><br>
<span style="color: blue;"><?php echo "User password :".$pasword;?></span><br>
<span style="color: blue;"><?php echo "Username :".$uname;?></span><br>
<span style="color: blue;"><?php echo "Birthday :".$birth;?></span><br>
<span style="color: blue;"><?php echo "User Mobile :".$mob;?></span><br>
<span style="color: blue;"><?php echo "User city :".$city;?></span>



<?php
 }
else{  ?>
	<script type="text/javascript">
		alert('you are not login');
		window.open('login.php');
	</script>
	<?php 
	}
	 ?>
</body>
</html>
<?php 
session_start();
if (isset($_SESSION['uid']) and isset($_SESSION['uname'])) {
$id=$_SESSION['uid'];
$username=$_SESSION['uname'];

// $id=$_GET['id'];
 $conn=mysqli_connect('localhost','root','','children');
 $sql="select * from pninfosys where id='$id'";
 $run=mysqli_query($conn,$sql);
 while ($sun=mysqli_fetch_assoc($run)) {
 	echo $id=$sun['id']; 
	// here feild must have same as database
   	     $email=$sun['email'];
    }
?>

<!DOCTYPE html>
<html>
<head>
	<title>HOME Login</title>
</head>
<body>
<h1 align="center" style="color: blue;"> Welcome <?php echo $username; ?></h1>
<span style="color: blue;"><?php echo "User Id :".$id;?></span>
<a href="logout.php" style="margin-left: 1200px;  padding: 5px; color: red;">Logout</a>
<hr>
<span style="color: blue;"><?php echo "User Email :".$email;?></span>
<?php
 }
else{  ?>
	<script type="text/javascript">
		alert('you are not login');
		window.open('loginpn.php');
	</script>
	<?php 
	}
	 ?>
</body>
</html>
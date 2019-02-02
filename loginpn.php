<?php 
// this code for if user is already login on the browser
session_start();
if (isset($_SESSION['uid']) and isset($_SESSION['uname'])) {
	?>
	<script type="text/javascript">
		alert('You are already login..');
		window.open('logindetail.php');
	</script>
	<?php
	exit();
}

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Login Pn</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body class="bg-primary">
<div class="container">
<div class="row">
	<div class="col-md-4"></div>
	<div class="col-md-4" style="background-image: url('bg4.jpg');">
		<form method="post">
			<h2> Login Account</h2>
			<div class="form-group">
				<label>Email</label>
				<input type="email" name="email" class="form-control"
				placeholder="Your Email">
			</div>
			
			<div class="form-group">
				<label>Your Name</label>
				<input type="password" name="name" class="form-control"
				placeholder="Your Name">
			</div>
						<button type="submit" name="submit" value="Login Account">Login </button>
		</form>
	</div>	
</div>	
</div>
</body>
</html>
<?php 
if(isset($_POST['submit']))
 {
	  $email=$_POST['email'];
	  $name=$_POST['name'];
	$conn=mysqli_connect('localhost','root','','children');
	$sql="select * from pninfosys where email='$email' AND fname='$name'";
	$run=mysqli_query($conn,$sql);
	$row=mysqli_num_rows($run);
	if ($row<1) { ?>
		<script type="text/javascript">
			alert('Username and Name is Invalid');
		</script>
		<?php exit(); } 
		else{
			$result=mysqli_fetch_assoc($run);
			// session_start();
			// this sassion is start for the show the value in the next page. sassion work is like post and get method .
			$_SESSION['uid']=$result['id'];
			$_SESSION['uname']=$result['fname'];
            header('location:logindetail.php');
            }
		}
	?>
	
<!DOCTYPE html>
<html>
<head>
	<title>Signup/Registration Form</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body class="bg-primary">
<div class="container">
<div class="row">
	<div class="col-md-4"></div>
	<div class="col-md-4" style="background-image: url('bg3.jpg');">
		<form method="post">
			<h2> Create your Account</h2>
			<div class="form-group">
				<label>Email</label>
				<input type="email" name="email" class="form-control"
				placeholder="Your Email">
			</div>
			<div class="form-group">
				<label>Username</label>
				<input type="text" name="username" class="form-control"
				placeholder="Your Username">
			</div>
			<div class="form-group">
				<label>Birthday</label>
				<input type="date" name="dob" class="form-control"
				placeholder="Your Birthday">
			</div>
			<div class="form-group">
				<label>Mobile</label>
				<input type="number" name="mob" class="form-control"
				placeholder="your mobile number">
			</div>
			<div class="form-group">
				<label>Password</label>
				<input type="password" name="pass" class="form-control"
				placeholder="Your Password">
			</div>
			<div class="form-group">
				<label>Select City</label>
				<select name="city" class="form-control">
					<option >--select--</option>
					<option >Gwalior</option>
                    <option >Datia</option>
                    <option >Jhansi</option>
                     <option>Shivpuri</option>
                </select>
			</div>
			<button type="submit" name="submit" value="Create Account">Create Account </button>
		</form>
	</div>	
</div>	
</div>
</body>
</html>
<?php 
if (isset($_POST['submit']))
 {
	  $email=$_POST['email'];
	  $username=$_POST['username'];
	  $birthday=$_POST['dob'];
	  $mobile=$_POST['mob'];
	  $password=$_POST['pass'];
	  $city=$_POST['city'];
	$conn=mysqli_connect('localhost','root','','form1');
	if ($conn) {
		echo "connection successfully";
	}
	else{
		echo "not successfull";
	}
	$s="select * from signup where email='$email'";
	$r=mysqli_query($conn,$s);
	$data=mysqli_fetch_assoc($r);
	if($email==$data['email'])
	{ ?>
		<script type="text/javascript">
			alert('Email Account is already exist.');
		</script>
		
   <?php exit(); }
   else
   {
    $sql="INSERT INTO signup(email, username, birthday, mobile, password, city) VALUES ('$email','$username','$birthday','$mobile','$password','$city')";
	$run=mysqli_query($conn,$sql);
	if ($run) {
		?>
		<script type="text/javascript">
			alert('Your Account is successfully Created');
		</script>
     <?php }
	     else
	     {
		   ?>
		<script type="text/javascript">
			alert('Your Account is Not Created');
		</script>
	<?php }
    }
}
?>
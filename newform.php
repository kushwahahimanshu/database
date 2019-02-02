<!DOCTYPE html>
<html>
<head>
	<title>Pninfosys</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

</head>
<body class="bg-light">
<div class="container">
	<nav class="navbar navbar-expand-lg navbar-light bg-light" style="color: blue!important;">
  <a class="navbar-brand" href="#">
    <img src="pn.png" width="30" height="30" class="d-inline-block align-top" alt="">
    INFOSYS
  </a>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Form
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Login</a>
          <a class="dropdown-item" href="#">Registration</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">logout</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Register Now</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
	<form method="post">
		    <small class="form-text-lg text-muted">Contact With Us By Filling Out The Form Below.</small>
  <div class="form-row">
    <div class="form-group col-lg-6">
      <label>First Name <span class="fb-required" style="color:#ff0000; font-weight: 400; margin-left: 3px; ">*</span></label>
      <input type="text" class="form-control" name="fname"  placeholder="First Name" required>
    </div>
    <div class="form-group col-lg-6">
      <label>Last Name <span class="fb-required" style="color:#ff0000; font-weight: 400; margin-left: 3px; ">*</span></label>
      <input type="text" class="form-control" name="lname" placeholder="Last Name" required>
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-lg-6">
      <label>FATHER NAME <span class="fb-required" style="color:#ff0000; font-weight: 400; margin-left: 3px; ">*</span></label>
      <input type="text" class="form-control" name="father" placeholder="Father Name" required>
    </div>
    <div class="form-group col-lg-6">
      <label>Email <span class="fb-required" style="color:#ff0000; font-weight: 400; margin-left: 3px; ">*</span></label>
      <input type="email" class="form-control" name="email" placeholder="Email" required>
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-lg-6">
      <label>Phone <span class="fb-required" style="color:#ff0000; font-weight: 400; margin-left: 3px; ">*</span></label>
      <input type="number" class="form-control" name="phone" placeholder="Contact Number" required>
    </div>
    <div class="form-group col-lg-6">
      <label>D.o.B. <span class="fb-required" style="color:#ff0000; font-weight: 400; margin-left: 3px; ">*</span></label>
      <input type="date" class="form-control" name="birth" placeholder="your birthday" required>
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-lg-6">
      <label>Gender <span class="fb-required" style="color:#ff0000; font-weight: 400; margin-left: 3px; ">*</span></label>
      <div class="custom-control custom-radio">
    <input type="radio" class="custom-control-input" id="customControlValidation2" name="radio" required>
    <label class="custom-control-label" for="customControlValidation2">Male</label>
  </div>
    <div class="custom-control custom-radio mb-3">
    <input type="radio" class="custom-control-input" id="customControlValidation3" name="radio" required>
    <label class="custom-control-label" for="customControlValidation3">Female</label>
    </div>
    </div>
    <div class="form-group col-lg-6">
      <label>Street Address1 <span class="fb-required" style="color:#ff0000; font-weight: 400; margin-left: 3px; ">*</span></label>
      <input type="text" class="form-control" name="add1" placeholder="Address1" required>
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-lg-6">
      <label>Street Address2 <span class="fb-required" style="color:#ff0000; font-weight: 400; margin-left: 3px; ">*</span></label>
      <input type="text" class="form-control" name="add2"  placeholder="Address2" required>
    </div>
    <div class="form-group col-lg-6">
      <label>Collage Name <span class="fb-required" style="color:#ff0000; font-weight: 400; margin-left: 3px; ">*</span></label>
      <input type="text" class="form-control" name="cname" placeholder="Collage Name" required>
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-lg-6">
      <label>Qualification<span class="fb-required" style="color:#ff0000; font-weight: 400; margin-left: 3px; ">*</span></label>
      <input type="text" class="form-control" name="quali" required>
    </div>
    <div class="form-group col-lg-6">
      <label>Branch <span class="fb-required" style="color:#ff0000; font-weight: 400; margin-left: 3px; ">*</span></label>
      <input type="text" class="form-control" name="branch" required>
    </div>
  </div>
<div class="form-row">
    <div class="form-group col-lg-6">
      <label>Semester <span class="fb-required" style="color:#ff0000; font-weight: 400; margin-left: 3px; ">*</span></label>
      <select id="inputState" class="form-control" name="sem" >
        <option selected>I Sem</option>
        <option>II Sem</option>
        <option>III Sem</option>
        <option>IV Sem</option>
        <option>V Sem</option>
        <option>VI Sem</option>
        <option>VII Sem</option>
        <option>VIII Sem</option>
      </select>    </div>
    <div class="form-group col-lg-6">
      <label>Training Courses <span class="fb-required" style="color:#ff0000; font-weight: 400; margin-left: 3px; ">*</span></label>
    <select id="inputState" class="form-control" name="course">
        <option selected>Web Designing</option>
        <option>Workshop</option>
        <option>Core PHP</option>
        <option>Web Devlopment</option>
        <option>PhotoShop</option>
        <option>JavaScript</option>
        <option>Wordpress CMS</option>
        <option>Laravel FrameWork</option>
      </select>    </div>
   </div>
    <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
  <a href=""><button class="btn btn-primary">already register</button></a>
</form>
</div>
</body>
</html>
<?php 
if (isset($_POST['submit']))
 {
	  $fname=$_POST['fname'];
	  $lname=$_POST['lname'];
	  $father=$_POST['father'];
	  $email=$_POST['email'];
	  $phone=$_POST['phone'];
	  $birth=$_POST['birth'];
	  $gender=$_POST['radio'];
	  $add1=$_POST['add1'];
	  $add2=$_POST['add2'];
	  $collage=$_POST['cname'];
	  $quali=$_POST['quali'];
	  $branch=$_POST['branch'];
	  $sem=$_POST['sem'];
	  $course=$_POST['course'];

	$conn=mysqli_connect('localhost','root','','children');
	$s="select * from pninfosys where email='$email'";
	$r=mysqli_query($conn,$s);
	$data=mysqli_fetch_assoc($r);
	if($email==$data['email'])
	{ ?>
		<script type="text/javascript">
			alert('Email Account is already exist.');
			window.open('loginpn.php');
		</script>
		
   <?php exit(); }
   else
   {
    $sql="INSERT INTO pninfosys(fname, lname, fathername, email, phone, birth, gender, add1, add2, collage, qualification, branch, semester, training) VALUES ('$fname','$lname','$father','$email','$phone','$birth','$gender','$add1','$add2','$collage','$quali','$branch','$sem','$course')";
	$run=mysqli_query($conn,$sql);
	if ($run) {
		?>
		<script type="text/javascript">
			alert('Your Are successfully Register');
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
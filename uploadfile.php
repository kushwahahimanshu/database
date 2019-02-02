<!DOCTYPE html>
<html>
<head>
	<title>upload file</title>
</head>
<body>
	<form method="post" enctype="multipart/form-data">
		<!--here enctype is use for if file may be diff type like img, pdf,doct.etc.-->
		<table align="center" border="5" cellpadding="10">
			<h3 align="center">upload file</h3>
			<tr>
				<td>enter your name:</td>
				<td><input type="text" name="nm"></td>
			</tr>
			<tr>
				<td>Upload File</td>
				<td><input type="file" name="file"></td>
			</tr>
			<tr>
				<td><a href="#abc">show</a></td>
			</tr>
			<tr><td><input type="submit" name="submit" value="Upload File"></td></tr>
		</table>
	</form>
</body>
</html>
<?php 
if (isset($_POST['submit'])) {
$name=$_POST['nm'];
// print_r($_FILES['file']);
$file=$_FILES['file']['name'];
// here we not get file  we upload file so we use $_FILES in place of $_POST and "name" is the file name-i.e.hk.jpg etc.
$temp=$_FILES['file']['tmp_name'];
// here file is come from the temp_name folder of server to local variable $temp and we save image on server to show the image on form.
$destination="image/$file";
// here $file is name is same as image name here we can also use diff name but image is save as name as you given (i.e.hh,ff) name save image. image is folder on same directry where code is exist.i.e database. 
move_uploaded_file($temp,$destination);
// file is come on database and to show the image access from the server folder i.e.image.
$conn=mysqli_connect('localhost','root','','form1');
$sql="insert into uploadfile (name,file) values('$name','$file')";
$run=mysqli_query($conn,$sql);
if ($run) {?>
	<script type="text/javascript">
		alert('file upload successfully');
	</script>
<?php	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>show image</title>
</head>
<body>
<table align="center" id="abc" border="5" cellpadding="10">
	<h2 align="center">Your image data show </h2>
	<tr>
	<th>Your name </th>
	<th>Photo</th>
    </tr>
    <?php 
       $show="select * from uploadfile";
       $run1=mysqli_query($conn,$sql);
       while ($result=mysqli_fetch_assoc($run1)) {
       	?>
       	<tr>
       		<td><?php echo $result['id']  ?></td>
       		<td><?php echo $result['name']  ?></td>
            <td><img src="image/<?php echo $result['file']?>"></td>
       	</tr>
       	<?php  
       }
     ?>

</table>
</body>
</html>
<?php  
}
 ?>
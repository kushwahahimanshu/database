
<!DOCTYPE html>
<html>
<head>
	<title>form</title>
</head>
<body>
	<form action="result1.php" method="POST">
		<table>
			<tr>
				<td><b><i>Name</i></b></td>
				<td><input type="text" name="nm" required=""></td>
			</tr>
			<tr>
				<td><b><i>Father Name</i></b></td>
				<td><input type="text" name="fn" required=""></td>
			</tr>
			<tr>
				<td><b><i>DOB</i></b></td>
				<td><input type="date" name="dt"></td>
			</tr>
			 <tr>
				<td><b><i>City</i></b></td>
				<td><select name="City">
					<option value="--select--">select</option>
					<option value="gwalior">Gwalior</option>
					<option value="datia">datia</option>
				</select></td>
			</tr>
			<tr>
				<td><b><i>Address</i></b></td>
				<td><textarea cols="10" rows="5" name="add" required=""></textarea></td>
			</tr>
				<tr>
				<td><b><i>Gender</i></b></td>
				<td><input type="radio" name="gen" value="male">Male
					<input type="radio" name="gen" value="female">Female
				    <input type="radio" name="gen" value="other">Other</td>
			</tr>
			<tr>
				<td><b><i>Password</i></b></td>
				<td><input type="password" name="pass" ></td>
			</tr>
			<!--<tr>
				<td><b><i>Checkbox</i></b></td>
				<td><input type="checkbox" name="ch" value="Gwalior">Gwalior
					<input type="checkbox" name="ch" value="indore">Indore
					<input type="checkbox" name="ch" value="datia">Datia</td>
			</tr>-->
			<tr>
				<td><b><i>Upload</i></b></td>
				<td><input type="file" name="file" required=""></td>
			</tr>
			<tr>
				<td><b><i>Mobile No.</i></b></td>
				<td><input type="number" name="num" maxlength="10" required=""></td>
			</tr> 
		</table>
					<input type="submit" name="submit">

	</form>

</body>
</html>

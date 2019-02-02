<!DOCTYPE html>
<html>
<head>
	<title>BILL</title>
</head>
<body>
<form action="datainsert.php" method ="post">
	<label>Serial No.</label>
	<input type="text" name="snum"><br>

	<label>Product Name</label>
	<input type="text" name="pname"><br>

	<label>Order_Date</label>
	<input type="date" name="ordate"><br>

    <label>Quatity</label>
    <select name="quant"><option>Select</option><option>5</option><option>10</option><option>15</option><option>20</option></select><br>

	<label>Rate</label>
	 <select name="rate"><option>Select</option><option>50</option><option>100</option><option>75</option><option>25</option></select><br>

	 <label>Discount</label>
     <select name="dis"><option>Select</option><option>5</option><option>10</option><option>15</option><option>20</option></select><br>

     <input type="submit" name="sub">
</form>
</body>
</html>
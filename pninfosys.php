<!DOCTYPE html>
<html>
<head>
  <title>Registratio page</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body class="bg-secondary">
  <div class="container" style="background-image: url('bg1.jpeg');">
    <div style="font-family: vardana; color: red;"><h1>Registration Form</h1></div>
    <form action="insertpn.php" method="post">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="Email" name="email">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" id="inputPassword4" placeholder="Password" name="pass">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Local Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="Kampoo Road" name="local">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Parmanent Address </label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor" name="parmanent">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" id="inputCity" name="city">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">State</label>
      <select id="inputState" class="form-control" name="state">
        <option>..Choose...</option>
        <option>Madhya Pradesh</option>
        <option>Uttar Pradesh</option>
        <option>Gujrat</option>
        <option>Maharastra</option>
        <option>Rajisthan</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Pin</label>
      <input type="text" class="form-control" id="inputZip" name="pin">
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Sign in</button>
</form>
  </div>

</body>
</html>
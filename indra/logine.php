<!DOCTYPE html>
<html lang="en">
<head>
  <title>E-paper login panel</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>

<div class="container">
  <h2>Login</h2>
  <form action="https://epaper.thehindu.com/index.php?rt=api/loginService" method="post" name="frmlogin" id="frmlogin">
    <input type="hidden" value="info@pressmonitor.com" name="txtemail">
    <input type="hidden" value="news@1234" name="txtpwd">
	
    <input type="submit" class="btn btn-default" id="loginbtn">
  </form>
</div>

</body>
</html>




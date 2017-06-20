<!--vineeshswarupbnis.99@gmail.com
vineesh-->

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bulk sms</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>

<div class="container">
  <h2>Bulk sms</h2>
  <form action="http://cp.bulksms.ae/api/" method="get">
    <input type="hidden" value="vineeshswarupbnis.99@gmail.com" name="login">
    <input type="hidden" value="vineesh" name="password">

    <div class="form-group">
      <label for="email">Massage</label>
        <textarea name="message" class="form-control"></textarea>
    </div>
    <div class="form-group">
      <label for="pwd">Number:</label>
	<input class="form-control" type="text" name="numbers">
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>

</body>
</html>


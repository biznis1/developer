<html>
<head>
<script src="https://cdn.jsdelivr.net/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
<script src="js/form-validation.js"></script>
</head>
<body>
<div>
<center>
<form method="POST" name="registration" id="form">

<h1>Register here</h1>
<table border="1">
<tr>
<td><label>Email : </label></td>
<td><input type="email" name="email" id="email" required><br/></td>
</tr>
<tr>
<td><label>Firstname : </label></td>
<td><input type="text" name="fname" id="fname" required><br/></td>
</tr>
<tr>
<td><label>Password : </label></td>
<td><input type="password" name="pwd" id="pwd" required><br/></td>
</tr>
<tr>
<td><label>Confirm Password : </label></td>
<td><input type="password" name="cpwd" id="cpwd" required><br/></td>
</tr/>
<tr>
<td colspan="2"><label><input type="checkbox" id="checkboxid" name="ch" id="ch">&nbsp I agree <a href="">Terms and Condition</a> of the website.</label><br/></td>
</tr>
<tr>
<td colspan="2">
<input type="submit" name="sub" id="sub" value="Submit" >
</td>
</tr>
</table>
</form>
<p id="msg"></p>
</center>
</div>
</body>
</html>
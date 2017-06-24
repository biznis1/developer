<?php
error_reporting(0);
extract($_POST);
if(isset($sub))
{
	echo $fn;	
}
?>
<!DOCTYPE HTML>
<html>
<body>
<center>
<form method="POST">
<input type="text" name="fn" id="fn">
<input type="submit" value="submit" name="sub" id="sub">
</form>
</center>
</body>
</html>
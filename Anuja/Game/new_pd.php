<?php
error_reporting(0);
extract($_POST);
$A=str_shuffle("A@#JHjahSDcmksdBJHJHJlmklv3565hjka");
if(isset($save))
{
	header('location:http://befikreclub.uphero.com/');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin Change Password</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css"/>
	<!--<script>
	function visible()
	{
	document.getElementById('OTPmess').innerHTML="<span style='color:red'><?php echo $pass;?></span>";
	}
	</script>-->
        <script>
	$(document).ready(function()
	{
		$("#cap").click(function()
		{
			var capp=$("#cap").val();
			if(capp!="")
			{
				$.post("gen.php",{cappp:capp},function(data)
					{
						$("#captcha").val(data);
					});
			}
		});
	});
</script>
</head>
<body background="image.jpg">
<div class="modal show w3-animate-zoom" id="mydodal1" role="dialog">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header" style="background:#2874f0;color:white">
<h3 class="modal-title text-center">Update your password here.</h3>
</div>
<div class="modal-body">
<div class="container-fluid">
				<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<form class="form-vertical" method="POST" name="fdbk" style="padding-left:20px;padding-right:20px;padding-top:20px;padding-bottom:20px">
							<div class="form-group">
							 <input type="text" name="olpwd" id="olpwd" class="form-control" required="required" placeholder="Old password">
							</div>
							<div class="form-group">
							 <input type="text" name="newpwd" id="newpwd" class="form-control" required="required" placeholder="New password">
							</div>
							<div class="form-group">
							 <input type="text" name="cnpwd" id="cnpwd" class="form-control" required="required" placeholder="Confirm password">
							</div>
							<div class="form-group">
							 <div class="input-group"><input type="text" class="form-control" name="captcha" id="captcha" readonly="readonly" value="<?php echo substr($A,0,9);?>" size=7/><span class="input-group-btn"><input type="button" name="cap" class="btn btn-info" id="cap" value="New"/></span></div>
							</div>
							<div class="form-group">
							<input type="text" name="recaptcha" class="form-control" id="recaptcha" placeholder="Type above captcha here">
							</div>							
                            <div class="form-group">
							<input type="submit" name="save" value="Submit" style="background:#fe980f;color:white" class="btn" id="sub"><input type="reset" name="clear" class="pull-right btn" value="Reset" style="background:#fe980f;color:white" id="clear">
							</div>
						</form>	
				</div>
				</div>
</div>
</div>
<div class="modal-footer" style="background:#2874f0;color:white">
</div>
</div>
</div>
</div>
</body>
</html>
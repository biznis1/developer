<?php
error_reporting(0);
session_start();
$datacat=$_SESSION['sid'];
include("link.php");
extract($_POST);
if(isset($sub))
{
   if($otpp==$otp)
   {
     echo "<script>location.href='index.php';</script>";
   }
   else
   {
     echo "<script>alert('Incorrect captcha');
location.href='new_pd.php';</script>"; 
   }
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
			$("#gen").click(function()
			{
					<?php
					   $sel=mysqli_query($link,"select email from Registrationdetails where email='$email'");
					   $arr=mysqli_fetch_assoc($sel);
					   if($emlll==$arr['email'])
					   {
						  $arr=array_merge(range(0,9),range(0,9));
						   for($i=1;$i<=6;$i++)
							{
							$ch=$arr[array_rand($arr)];
							$captcha=$captcha.$ch;
							$fc=$fc.$ch.",";
							}
						   $nar=explode(",",$fc);
						   $to=$emlll;
						   $subject="OTP for Reset password";
						   $header="From: Admin<noreply>";
						   $message="Your OTP is : "."$captcha"."."."This OTP is valid only for 180s.";
						   session_start();
						   $_SESSION['captcha']=$captcha;
						  if(mail($to,$subject,$message,$header))
						   {
							$data="OTP has been send to your mail. This OTP is valid for 180s.";   
										?>
					document.getElementById(mess).innerHTML="<span style='color:red'><?php echo $data;?></span>";
					
								<?php
						   }
						   else
						   {
							echo "Please try again."; 
						   }
					   }
					   else
					   {
							  echo "You're not registered member. Please register first.";
					   }
					?>
					
					
					
					
					
					/* var eml=$("#email").val();
					if(eml!="")
					{
					$.post("OTP.php",{emll:eml},function(data)
					{
alert('OTP has been send to your mail. This OTP is valid for 180s.');
						$("#otpp").val(data);
					})
					} */
			});
		});
	</script>
</head>
<body background="image.jpg">
<div class="modal show w3-animate-zoom" id="mydodal1" role="dialog">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header" style="background:#2874f0;color:white">
<h3 class="modal-title text-center">Reset your password here.</h3>
</div>
<div class="modal-body">
<div class="container-fluid">
				<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<form class="form-horizontal" action="#" method="POST" name="fdbk" style="padding-left:20px;padding-right:20px">
							<div class="form-group">
							 <input type="email" name="email" id="email" class="form-control" required="required" placeholder="Registered email">
							</div>
							<div class="form-group">
							<input type="button" class="btn" style="background:#fe980f;color:white" value="OTP" name="gen" id="gen">
							</div>							
							<div class="form-group">
							 <input type="tel" name="otp" id="otp" class="form-control" required="required" placeholder="OTP">
							</div>
                                                        <div class="form-group">
							 <h5 id="mess" style="color:red"></h5>
							</div>
                                                        <div class="form-group">
							<input type="submit" name="sub" value="Submit" style="background:#fe980f;color:white" class="btn" id="sub"><a href="index.php" class="btn btn-primary pull-right">Register here.</a>
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
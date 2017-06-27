<?php
error_reporting(0);
include("link.php");
extract($_POST);
if(isset($save))
{
	/*$fname=mysqli_real_escape_string($link,htmlentities(trim($fname)));
	$mname=mysqli_real_escape_string($link,htmlentities(trim($mname)));
	$lname=mysqli_real_escape_string($link,htmlentities(trim($lname)));
	$uname=mysqli_real_escape_string($link,htmlentities(trim($uname)));
	$pwd=mysqli_real_escape_string($link,htmlentities(trim($pwd)));
	$gender=mysqli_real_escape_string($link,htmlentities(trim($gender)));
	$dob=mysqli_real_escape_string($link,htmlentities(trim($dob)));
	$email=mysqli_real_escape_string($link,htmlentities(trim($email)));
	$mobileno=mysqli_real_escape_string($link,htmlentities(trim($mobileno)));*/
	$pwd=md5($pwd);
	if(mysqli_query($link,"insert into Registrationdetails values('$fname','$mname','$lname','$uname','$pwd','$gender','$dob','$email','$mobileno')"))
	{
		echo "<script>alert('Successfully Registered, You are ready to login.');
		</script>";
	}
	else
	{
		echo "<script>alert('Already exist');</script>";
	}
	
}
if(isset($sub))
{
	/*$pass=mysqli_real_escape_string($link,htmlentities(trim($pwd)));
	$eid=mysqli_real_escape_string($link,htmlentities(trim($email)));*/
	$pass1=$pass;
	$pass=md5($pass);
	$sel=mysqli_query($link,"select * from Registrationdetails where email='$eid'");
	$arr=mysqli_fetch_assoc($sel);
	if($eid==$arr['email']&&$pass==$arr['pwd'])
	{
		session_start();
		$_SESSION['sid']=$arr[fname];
                $_SESSION['sid1']=$arr[mname];
                $_SESSION['sid2']=$arr[lname];
                $_SESSION['sid3']=$eid;
		//set cookie
		if(isset($ck))
		{
			setcookie("eid",$eid,time()+3600);
			setcookie("pass",$pass1,time()+3600);	
		}
		echo "<script>alert('You have successfully loged in');
		location.href='lucky7page.php';</script>";
	}
	else
	{
		$a="<span style='color:white'>* Username or password is incorrect</span>";
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Admin login page</title>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="css files/mystyle.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css"/>
<script>
$(document).keydown(function(event){
    if(event.keyCode==123){
    return false;
   }
else if(event.ctrlKey && event.shiftKey && event.keyCode==73){        
      return false;  //Prevent from ctrl+shift+i
   }
});
$(document).on("contextmenu",function(e){        
   e.preventDefault();
});
</script>
<script type="text/javascript">
    function mousehandler(e) {
        var myevent = (isNS) ? e : event;
        var eventbutton = (isNS) ? myevent.which : myevent.button;
        if ((eventbutton == 2) || (eventbutton == 3)) return false;
    }
    document.oncontextmenu = mischandler;
    document.onmousedown = mousehandler;
    document.onmouseup = mousehandler;
    function disableCtrlKeyCombination(e) {
        var forbiddenKeys = new Array("a", "s", "c", "x","u");
        var key;
        var isCtrl;
        if (window.event) {
            key = window.event.keyCode;
            //IE
            if (window.event.ctrlKey)
                isCtrl = true;
            else
                isCtrl = false;
        }
        else {
            key = e.which;
            //firefox
            if (e.ctrlKey)
                isCtrl = true;
            else
                isCtrl = false;
        }
        if (isCtrl) {
            for (i = 0; i < forbiddenKeys.length; i++) {
                //case-insensitive comparation
                if (forbiddenKeys[i].toLowerCase() == String.fromCharCode(key).toLowerCase()) {
                    return false;
                }
            }
        }
        return true;
    }
</script>
<SCRIPT language=JavaScript>

<!-- http://www.spacegun.co.uk -->

var message = "Sorry my dear.";

function rtclickcheck(keyp){ if (navigator.appName == "Netscape" && keyp.which == 3){ alert(message); return false; }

if (navigator.appVersion.indexOf("MSIE") != -1 && event.button == 2) { alert(message); return false; } }

document.onmousedown = rtclickcheck;

</SCRIPT>
<script>
function cook()
  {
		if("<?php echo $_COOKIE['eid'];?>"!=null)
	{
		if(document.getElementById("eid").value=="<?php echo $_COOKIE['eid'];?>")
		{
		document.getElementById("pass").value="<?php echo $_COOKIE['pass'];?>";	
		}
	}
  }
  function tt()
  {
	 var d=new Date();
	 var t=d.getHours()+":"+ d.getMinutes()+":"+ d.getSeconds();
	 document.getElementById("tar").innerHTML=t;  
  }
</script>
</head>
<body onLoad="setInterval('tt()',1000)">
<div class="container-fluid top-bar">
<div class="container">
<div class="row">
<div class="col-lg-6 col-md-5 col-sm-12 col-xs-12  text-left"><span style="color:white;font-size:45px"><a href="newyourbook.php" class="text-decoration" style="color:white">Yourbook </a></span><span class="btn btn-info" style="color:white" id="tar"></span></div>
<form method="POST" name="login">
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 input-data text-left"><span style="color:white;font-size:12px"><a href="" class="text-decoration" style="color:white">Email or Phone :</a></span><br/><div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span><input type="text" name="eid" id="eid" onChange="cook()" placeholder="abc@gmail.com" title="I'd must have special character '@' " class="text-pwd" required/></div><span><?php echo $a;?></span><p><label  style="color:white"><input type="checkbox" name="ck" id="ck">&nbspKeep me signed in</label></p></div>
<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 input-data text-left"><span style="color:white;font-size:12px"><a href="" class="text-decoration" style="color:white">Password :</a><br/></span><div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span><input type="password" name="pass" id="pass" placeholder="Password" title="Passwords must contain at least 8 characters, including uppercase, lowercase letters, one special character and numbers. e.g. amitSIR@123 " required class="text-pwd"/></div><br/>
<a href="forgotpwdadmin.php" class="text-decoration" style="color:white">Forgoten password?&nbsp&nbsp&nbsp</a><input type="submit" name="sub" id="sub" value="login" class="btn btn-success btn-sm"></div>
</form>
</div>
</div>
</div>
<div class="container-fluid">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center text-primary" style="font-size:45px">Create a new account
</div>
</div>
<div class="row">
<div class="col-sm-12 col-md-12 col-sm-12 col-xs-12">
<form name="regisform" class="form-horizontal" method="post">
<div class="form-group"> 
<label class="control-label col-sm-6 col-md-6 col-sm-6 col-xs-6 text-right">First name :</label>
<div class="col-sm-6 col-md-6 col-sm-6 col-xs-6">
<input type="text" name="fname" id="fname"class="form-control" placeholder="First name"  required>
</div>
</div>
<div class="form-group">
<label class="control-label col-sm-6 col-md-6 col-sm-6 col-xs-6 text-right">Middle name :</label>
<div class="col-sm-6 col-md-6 col-sm-6 col-xs-6">
<input type="text" name="mname" id="mname" class="form-control"  placeholder="Middle name">
</div>
</div>
<div class="form-group">
<label class="control-label col-sm-6 col-md-6 col-sm-6 col-xs-6 text-right">Last name :</label>
<div class="col-sm-6 col-md-6 col-sm-6 col-xs-6">
<input type="text" name="lname" id="lname" class="form-control" placeholder="Last name"  required>
</div>
</div>
<div class="form-group">
<label class="control-label col-sm-6 col-md-6 col-sm-6 col-xs-6 text-right">Username :</label>
<div class="col-sm-6 col-md-6 col-sm-6 col-xs-6">
<input type="text" name="uname" id="uname" class="form-control" placeholder="Username"  required>
</div>
</div>
<div class="form-group">
<label class="control-label col-sm-6 col-md-6 col-sm-6 col-xs-6 text-right">Password :</label>
<div class="col-sm-6 col-md-6 col-sm-6 col-xs-6">
<input type="password" name="pwd" id="pwd" class="form-control"  title="Passwords must contain at least six characters, including uppercase, lowercase letters, one special character and numbers. e.g. amitSIR@123 " placeholder="Password" required>
</div>
</div>
<div class="form-group">
<label class="control-label col-sm-6 col-md-6 col-sm-6 col-xs-6 text-right">Gender :</label>
<div class="col-sm-6 col-md-6 col-sm-6 col-xs-6">
<input type="radio" name="gender" value="male" required> Male
<input type="radio" name="gender" value="female" required> Female
</div>
</div>
<div class="form-group">
<label class="control-label col-sm-6 col-md-6 col-sm-6 col-xs-6 text-right">Dob :</label>
<div class="col-sm-6 col-md-6 col-sm-6 col-xs-6">
<input type="date" class="form-control" name="dob"  required>
</div>
</div>
<div class="form-group">
<label class="control-label col-sm-6 col-md-6 col-sm-6 col-xs-6 text-right">Email :</label>
<div class="col-sm-6 col-md-6 col-sm-6 col-xs-6">
<input type="email" name="email" class="form-control" placeholder="abc@gmail.com"  required>
</div>
</div>
<!--<div class="form-group">
<label class="control-label col-lg-6 col-md-6 col-sm-6 col-xs-6 text-right">Nationality :</label>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
<select name="Select" class="form-control" required><option value="Select">Select</option><option  value="Andhra Pradesh">Andhra Pradesh</option><option value="Arunachal Pradesh">Arunachal Pradesh</option><option value="Assam">Assam</option><option value="Bihar">Bihar</option></select>
</div>
</div>-->
<div class="form-group">
<label class="control-label col-sm-6 col-md-6 col-sm-6 col-xs-6 text-right">Mobile no :</label>
<div class="col-sm-6 col-md-6 col-sm-6 col-xs-6">
<input type="text" name="mobileno" value="" class="form-control" placeholder="9777777777" maxlength="10"  required>
</div>
</div>
<div class="form-group">
<div class="col-sm-6 col-md-6 col-sm-6 col-xs-6 text-right">
<input type="Submit" name="save" class="btn btn-success btn-sm"  value="Submit"/>
</div>
<div class="col-sm-6 col-md-6 col-sm-6 col-xs-6 text-left">
<input type="Reset" name="clear" class="btn btn-info btn-sm" value="Reset"></td>
</div>
</div>
</form>
</div>
</div>
</div>
<div class="container-fluid">
<div class="row">
<div class="col-sm-12 text-center top-bar" style="background:#e4e4e4">This is my official webpage, Lucknow. All rights are reserved Copyright &copy.<br/>
		Contact details:<br/>   
		E-mail: pk21395@gmail.com<br/>
		Mobile-no: +91-8743037691, +91-9044769303<br/></tt></small>
		<a href="https://www.facebook.com" target="_blank" style="font-size:25px"><i class="fa fa-facebook-official"></i><a/>
		<a href="https://plus.google.com/explore" target="_blank" style="font-size:25px;color:#dc483c"><i class="fa fa-google-plus-square"></i><a/>
		<a href="https://www.google.co.in/" target="_blank" style="font-size:25px;color:blue"><i class="fa fa-google"></i><a/>
		<a href="https://twitter.com/" target="_blank" style="font-size:25px;color:#41a62d"><i class="fa fa-twitter-square"></i><a/>
		<a href="https://www.skype.com/en/" target="_blank" style="font-size:25px"><i class="fa fa-skype"></i><a/>
		<a href="https://www.youtube.com/" target="_blank" style="font-size:25px;color:red"><i class="fa fa-youtube-play"></i><a/>
</div>
</div>
</div>

</body>
</html>
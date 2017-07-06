
<!DOCTYPE html>
<html lang="en">
<head>
<title>Admin login page</title>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width,height=device-height,initial-scale=1.0, user-scalable=no" />
	<!--<meta name="viewport" content="width=device-width,height=device-height,initial-scale=1.0"/>-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="http://earneasy.epizy.com/css/game.css">
<link rel="stylesheet" href="http://earneasy.epizy.com/css/rgform.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css"/>
<script src="http://earneasy.epizy.com/js/cvu.js"></script>
<script src="http://earneasy.epizy.com/js/rclk.js"></script>
<script src="http://earneasy.epizy.com/js/cookietime.js"></script>
<script src="http://earneasy.epizy.com/js/register.js"></script>
<script src="http://earneasy.epizy.com/js/rgform.js"></script>
	<script>
		function cook()
  {
		if(""!=null)
	{
		if(document.getElementById("eid").value=="")
		{
		document.getElementById("pass").value="";	
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
	
	<style>
			input:focus { 
    background-color:black;
				font-weight:bold;
				color:white;
}
	</style>
</head>
<body onLoad="setInterval('tt()',1000)">
<div class="container-fluid top-bar">
<div class="container">
<div class="row">
<div class="col-lg-6 col-md-5 col-sm-12 col-xs-12  text-left"><span style="color:white;font-size:45px"><a href="newyourbook.php" class="text-decoration" style="color:white">Yourbook </a></span><span class="btn btn-info" style="color:white" id="tar"></span></div>
<form method="POST" name="login">
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 input-data text-left"><span style="color:white;font-size:12px"><a href="" class="text-decoration" style="color:white">Email or Phone :</a></span><br/><div class="input-group"><span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span><input type="text" name="eid" id="eid" onChange="cook()" placeholder="abc@gmail.com" title="I'd must have special character '@' " class="text-pwd" required/></div><span></span><p><label  style="color:white"><input type="checkbox" name="ck" id="ck">&nbspKeep me signed in</label></p></div>
<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 input-data text-left"><span style="color:white;font-size:12px"><a href="" class="text-decoration" style="color:white">Password :</a><br/></span><div class="input-group"><span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span><input type="password" name="pass" id="pass" placeholder="Password" title="Passwords must contain at least 8 characters, including uppercase, lowercase letters, one special character and numbers. e.g. amitSIR@123 " required class="text-pwd"/></div><br/>
<a href="forgotpwdadmin.php" class="text-decoration" style="color:white">Forgoten password?&nbsp&nbsp&nbsp</a><input type="submit" name="sub" id="sub" value="login" class="btn btn-success btn-sm"></div>
</form>
</div>
</div>
</div>
<div class="container-fluid">
<div class="row">
<h2 style="text-align:center;color:#42a1f4;font-weight:bold;text-shadow:4px 4px 3px black;font-size:40px">Create a new account</h2>
</div>
<div class="container-fluid">
<div class="row">
<div class="col-sm-4 col-md-4 col-sm-4 col-xs-4" style="text-align:center;height:20px;">1</div>
<div class="col-sm-4 col-md-4 col-sm-4 col-xs-4" style="text-align:center;height:20px;">2</div>
<div class="col-sm-4 col-md-4 col-sm-4 col-xs-4" style="text-align:center;height:20px;">3</div>
</div>
<div class="row probar">
<div class="col-sm-4 col-md-4 col-sm-4 col-xs-4 ft" style="text-align:center;color:white;background-color:red;height:20px;opacity:0.1;"></div>
<div class="col-sm-4 col-md-4 col-sm-4 col-xs-4 sc" style="text-align:center;color:white;background-color:blue;height:20px;opacity: 0.1;"></div>
<div class="col-sm-4 col-md-4 col-sm-4 col-xs-4 th" style="text-align:center;color:white;background-color:green;height:20px;opacity: 0.1;"></div>
</div>
</div>
<div class="row">
<div class="col-sm-12 col-md-12 col-sm-12 col-xs-12" style="height:35px;"></div>
</div>
<div class="row">
<!--Required Div Starts Here-->
<div class="col-sm-12 col-md-12 col-sm-12 col-xs-12">
<form method="POST" id="form1" class="form-horizontal fm">

<fieldset id="fs1">
<h2 class="fs-title text-center" style="text-align:center;color:red ;font-weight:bold;text-shadow:4px 4px 3px black;font-size:40px">Step-1</h2>
<!--<h3 class="fs-subtitle text-center">Sign-up</h3>-->
<p id="returnmessage"></p>
<label class="control-label">First name: <span>*</span></label>
<input type="text" name="fname" id="fname"class="form-control" placeholder="First name"  required>
<label class="control-label">Middle name: <span>*</span></label>
<input type="text" name="mname" id="mname" class="form-control"  placeholder="Middle name">
<label class="control-label">Last name:</label>
<input type="text" name="lname" id="lname" class="form-control" placeholder="Last name"  required>
<label class="control-label">Username: <span>*</span></label>
<input type="text" name="uname" id="uname" class="form-control" placeholder="Username"  required>
</br>
<input type="button" class="col-sm-3 pull-right" id="next1" value="Next"/>
</fieldset>
<fieldset id="fs2">
<h2 class="fs-title text-center" style="text-align:center;color:yellow;font-weight:bold;text-shadow:4px 4px 3px black;font-size:40px">Step-2</h2>
<!--<h3 class="fs-subtitle text-center">Other details</h3>-->
<p id="returnmessage"></p>
<label class="control-label">Password: <span>*</span></label>
<input type="password" name="pwd" id="pwd" class="form-control"  title="Password must contain at least six characters, including uppercase, lowercase letters, one special character and numbers. e.g. amitSIR@123 " placeholder="Password" required>
<div class="row">
	</br>
	<label class=" col-sm-4 col-md-4 col-sm-4 col-xs-4 pull-left">Gender: <span>*</span></label>
	<label class="col-sm-4 col-md-4 col-sm-4 col-xs-4">
		<input type="radio" name="gender" value="male" required> Male</label>
		<label class="col-sm-4 col-md-4 col-sm-4 col-xs-4">
	<input type="radio" name="gender" value="female" required> Female</label>
	</div>
<label class="control-label">Email: <span>*</span></label>
<input type="email" name="email" class="form-control" placeholder="abc@gmail.com"  required>
<label class="control-label">Mobile no:</label>
<input type="tel" name="mobileno" class="form-control" placeholder="9777777777" maxlength="10"  required>
</br>
<input type="button" class="col-sm-3 pull-right" id="next2" value="Next"/>
</fieldset>
<fieldset id="fs3">
<h2 class="fs-title text-center" style="text-align:center;color:green;font-weight:bold;text-shadow:4px 4px 3px black;font-size:40px">Step-3</h2>
<!--<h3 class="fs-subtitle text-center">Personal details</h3>-->
<p id="returnmessage"></p>
<label class="control-label">Dob: <span>*</span></label>
<input type="date" class="form-control" name="dob"  required>
<label class="control-label">status: <span>*</span></label>
<select class="form-control" id="status">
<option value="select">Select</option>
<option value="single">Single</option>
<option value="married">Married</option>
</select>
<label class="control-label">Language: <span>*</span></label>
<input type="text" id="lang" class="form-control" placeholder="Language"/>
<label class="control-label">Address:</label>
<textarea id="Add" class="form-control" placeholder="Address......."></textarea>
</br>
<input type="button" id="previous" class="col-sm-6 col-md-6 col-sm-6 col-xs-6" value="Prev"/ >
<input type="button" id="submit" class="col-sm-6 col-md-6 col-sm-6 col-xs-6" value="save"/>
</fieldset>
</form>
</div>
</div>
</div>
<div class="row">
<div class="col-sm-12 col-md-12 col-sm-12 col-xs-12" style="height:50px;"></div>
</div>
<!--<div class="container-fluid">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center text-primary" style="font-size:45px">Create a new account
</div>
</div>
<div class="row">
<div class="col-sm-12 col-md-12 col-sm-12 col-xs-12" id="fm">
<form name="regisform" id="regisform" class="form-horizontal" method="post">
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
<div class="form-group">
<label class="control-label col-sm-6 col-md-6 col-sm-6 col-xs-6 text-right">Mobile no :</label>
<div class="col-sm-6 col-md-6 col-sm-6 col-xs-6">
<input type="tel" name="mobileno" class="form-control" placeholder="9777777777" maxlength="10"  required>
</div>
</div>
<div class="form-group">
<div class="col-sm-6 col-md-6 col-sm-6 col-xs-6 text-right">
	<a name="save" id="save" class="btn btn-success btn-sm">Submit</a>
</div>
<div class="col-sm-2 col-md-2 col-sm-2 col-xs-2 text-left">
<input type="Reset" name="clear" class="btn btn-info btn-sm" value="Reset"></td>
</div>
<div class="col-sm-4 col-md-4 col-sm-4 col-xs-4 text-left" id="reg"></div>
</div>
</form>
</div>
</div>
</div>-->
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
		
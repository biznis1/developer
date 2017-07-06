
<!DOCTYPE html>
<html lang="en">
<head>
<title>Admin login page</title>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="http://earneasy.epizy.com/css/game.css">
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
	<script>
		$(document).ready(function()
		{
		$("#save").click(function()
			{
			document.getElementById("reg").innerHTML="<span style='color:gray;font-size:18px;font-weight:bold'><span class='glyphicon glyphicon-transfer'></span>Account Creating...</span>";
					var fname=$("#fname").val();
			var mname=$("#mname").val();
			var lname=$("#lname").val();
			var uname=$("#uname").val();
			var pwd=$("#pwd").val();
			var gender=$("form input[type='radio']:checked").val();
			var dob=$("form input[type='date']").val();
			var email=$("form input[type='email']").val();
			var mobileno=$("form input[type='tel']").val();
					if(fname!="" && lname!="" && uname!="" && pwd!="" && gender!="" && dob!="" && email!="" && mobileno!="")
					{
					$.post("register.php",{fnamee:fname,mnamee:mname,lnamee:lname,unamee:uname,pwdd:pwd,genderr:gender,dobb:dob,emaill:email,mobilenoo:mobileno},function(data)
					{
						if(data==1)
							{
								$("#reg").html("<span style='color:green;font-size:18px;font-weight:bold'><span class='glyphicon glyphicon-thumbs-up'></span>&nbspAccount Created</span>");
						//sleep(120);
							 $("#reg").fadeOut(6000);
								//document.getElementById("regisform").reset();
								$("#regisform")[0].reset();
								$("#eid").delay(8000).focus();
							}
						else if(data==0)
							{
								$("#reg").html("<span style='color:red;font-size:18px;font-weight:bold'><span class='glyphicon glyphicon-thumbs-down'></span>&nbspAlready exist</span>");
							//sleep(120);
								//$("#fm").empty();	
						 //$("input").fadeOut(3000);
						 $("#reg").fadeOut(6000);
								$("#regisform")[0].reset();
								$("#eid").delay(8000).focus();
							}
					});
					}
			else
			{
				$("#reg").html("<span style='color:red;font-size:18px;font-weight:bold'><span class='glyphicon glyphicon-alert'></span>&nbspRegistration failed.</span>");
				$("#reg").fadeOut(6000);
				$("#regisform")[0].reset();
					$("#fname").delay(8000).focus();
			}
			});
		});
		
		</script>
	<style>
			input:focus { 
    background-color:black;
				font-weight:bold;
				color:white;
}
	</style>
	<style>
.fm{
	width:80%;
	margin:auto;
	border-radius:2px;
	box-shadow:0 0 15px;
	font-size:14px;
	font-weight:bold;
	padding:10px 30px;
}
.fm:hover{
		box-shadow:0 0 40px;
}
.probar{
	border:1px solid black;
}
#fs2{
	display:none;
	}
	#fs3{
	display:none;
	}
select{
		width:100%;
		height:35px;
		margin-top:5px;
		border:1px solid #999;
		border-radius:3px;
		padding:5px;
    background-color: #f1f1f1;
	}
#form{
		border-radius:2px;
		padding:10px 30px;
		box-shadow:0 0 15px;
		font-size:14px;
		font-weight:bold;
		width:550px;
		margin:20px 195px 90px;
		float:left;
}
#mainform{
		width:960px;
		margin:auto;
		padding-top:5px;
		font-family: 'Fauna One', serif;
}
h3{
		text-align:center;
		font-size:20px;
}
		#form1>input{
		border:1px solid #999;
		border-radius:3px;
		padding:5px;
}
input[type=button]{
		background-color:#123456;
		border:1px solid white;
		font-family: 'Fauna One', serif;
		font-Weight:bold;
		font-size:18px;
		color:white;
}
textarea{
		width:100%;
		height:80px;
		margin-top:5px;
		border-radius:3px;
		padding:5px;
		resize:none;
}
span{
color:red
}
#note{
		color:black;
		font-Weight:400;
}
#returnmessage{
		font-size:14px;
		color:green;
		text-align:center;
}
</style>
<script>
	 $(document).ready(function()
	 {
		$("#next1").click(function()
		{
			$("#fs1").css("display", "none");
			$("#fs2").css("display","block");
			$(".ft").css("opacity","1.0").text("30%");
		});
		$("#next2").click(function()
		{
			 var ct=0;
			$("#fs2").css("display", "none");
			$("#fs3").css("display","block");
			if(ct==0)
			{
				$(".ft").css("opacity","1.0").text("");
			$(".sc").css("opacity","1.0").text("60%");
			ct++;
			}
			else{
				
				$(".sc").css("opacity","1.0").text("60%");
			}
		});
		$("#previous").click(function()
		{
			$("#fs3").css("display", "none");
			$("#fs2").css("display","block");
			$(".sc").css("opacity","0.1").text("");
			$(".th").css("opacity","0.1");
			$(".ft").css("opacity","1.0").text("30%");
			$(".th").css("opacity","0.1").text("");
			$(".probar").css("border","2px solid black");
		});
		$("#submit").click(function()
		{
			$("#fs2").css("display", "none");
			$("#fs3").css("display","block");
			$(".sc").css("opacity","1.0").text("");
			$(".th").css("opacity","1.0").text("100%");
			$(".probar").css("border","none");
		});
	 });
</script>
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
		
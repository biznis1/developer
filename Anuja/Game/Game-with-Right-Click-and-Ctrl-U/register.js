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
		
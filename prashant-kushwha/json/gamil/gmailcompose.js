		function myFont()
		{
			$("#message").css("font-family","cursive");
			$("#message").css("font-size","12px");
		}
		$(document).ready(function()
		{
			//$('[data-toggle="tooltip"]').tooltip(); 
			$("#com").click(function()
			{
				$("#compose").css("display","block");
			});
			var count=0;
			$("#min").click(function()
			{
				var minn=$("#min").html();
				if(minn!=" ")
				{
				if(count==0)
				{
					$("#main").css("display","none");
					$("#foot").css("display","none");
					$("#Bcc").css("display","none");
					$("#Cc").css("display","none");
					//$("#tedittor").toggleClass("ttedittor");
					if($("#tedittor").hasClass("ttedittor")==true)
				{
					$("#tedittor").removeClass("ttedittor");
					$("#tedittor").addClass("tedittor");
				}
				
					count++;
				}
				else
				{
					$("#main").css("display","block");
					$("#foot").css("display","block");
					if($("#tedittor").hasClass("tedittor")==true)
				{
					$("#tedittor").removeClass("tedittor");
					$("#tedittor").addClass("ttedittor");
				}
				else
				{
					$("#tedittor").removeClass("ttedittor");
					$("#tedittor").addClass("tedittor");
				}
					count--;
				}
				}
			});
			$("#mmin").click(function()
			{
				$("#myModal").modal("hide");
				var mminn=$("#mmin").html();
				if(mminn!=" ")
				{
				if(count==0)
				{
					$("#compose").css("display","block");
					$("#main").css("display","none");
					$("#foot").css("display","none");
					$("#mBcc").css("display","none");
					$("#mCc").css("display","none");
					count++;
				}
				else
				{
					$("#main").css("display","block");
					$("#foot").css("display","block");
					count--;
				}
				}
			});
			$("#max").click(function()
			{
				$("#compose").css("display","none")
				$("#myModal").modal({backdrop: "static"});
				if($("#tedittor").hasClass("tedittor")==true)
				{
					$("#tedittor").removeClass("tedittor");
					$("#tedittor").addClass("ttedittor");
				}
				else
				{
					$("#tedittor").removeClass("ttedittor");
					$("#tedittor").addClass("tedittor");
				}
			});
			$("#mmax").click(function()
			{
				$("#compose").css("display","block")
				if($("#tedittor").hasClass("tedittor")==true)
				{
					$("#tedittor").removeClass("tedittor");
					$("#tedittor").addClass("ttedittor");
				}
				else
				{
					$("#tedittor").removeClass("ttedittor");
					$("#tedittor").addClass("tedittor");
				}
			});
			$("#em1").focus(function()
			{
				$("#em1").css("display","none");
				$("#eml").css({"display":"block"});
				$("#email").focus();
			});
			$("#mem1").focus(function()
			{
				$("#mem1").css("display","none");
				$("#meml").css("display","block");
				$("#memail").focus();
			});
			$(".cross").click(function()
			{
				$("#compose").css("display","none")
				$("#Bcc").css("display","none");
				$("#Cc").css("display","none");
				if($("#tedittor").hasClass("ttedittor")==true)
				{
					$("#tedittor").removeClass("ttedittor");
					$("#tedittor").addClass("tedittor");
				}
				if($("#fcolor").hasClass("fffcolor")==true)
				{
					$("#fcolor").removeClass("fffcolor");
					$("#fcolor").addClass("fcolor");
				}
			});
			$("#mcross").click(function()
			{
				$("#myModal").modal("hide");
			});
			
			$("#dismiss").click(function()
			{
				$("#compose").css("display","none");
			});
			$("#mdismiss").click(function()
			{
				$("#myModal").modal("hide");
			});
			$("#subject").focus(function()
			{
				
				var email=$("#emial").val();
				if(email== " ")
				{alert("dddf");
					$("#em1").css("display","block");
					$("#eml").css("display","none");
				}
			});
			$("#message").click(function()
			{
				$("#message").focus(function()
				{
				
				var email=$("#emial").val();
				if(email== " ")
				{alert("dddf");
					$("#em1").css("display","block");
					$("#eml").css("display","none");
				}
				});
			});
			$("#undo").click(function()
			{
				$("#compose").css("display","block");
			});
			$("#trash").click(function()
			{
				$("#compose").css("display","none");
				$("#mess").css("display","block");
				$("#mess").fadeOut(7000);
			});
			$("#tedit").click(function()
			{
				
				if($("#tedittor").hasClass("tedittor")==true)
				{
					$("#tedittor").removeClass("tedittor");
					$("#tedittor").addClass("ttedittor");
				}
				else
				{
					$("#tedittor").removeClass("ttedittor");
					$("#tedittor").addClass("tedittor");
					$("#fcolor").removeClass("fffcolor");
					$("#fcolor").addClass("fcolor");
				}
			});
			$("#message").select(function()
			{
				
			
			});
			$("#btn-Bcc").click(function()
			{
				$("#Bcc").css("display","block");
			});
			$("#btn-Cc").click(function()
			{
				$("#Cc").css("display","block");
			});
			$("#btn-mBcc").click(function()
			{
				$("#mBcc").css("display","block");
			});
			$("#btn-mCc").click(function()
			{
				$("#mCc").css("display","block");
			});
			$("#af").click(function()
			{
			$("#af").upload();
			});
			$("#ffcolor").click(function()
			{
				if($("#fcolor").hasClass("fcolor")==true)
				{
					$("#fcolor").removeClass("fcolor");
					$("#fcolor").addClass("fffcolor");
				}
				else
				{
					$("#fcolor").removeClass("fffcolor");
					$("#fcolor").addClass("fcolor");
				}
			});
			$("#red").click(function()
			{
				$("#message").css("color","red");
			});	
			$("#green").click(function()
			{
				$("#message").css("color","green");
			});	
			$("#yellow").click(function()
			{
				$("#message").css("color","yellow");
			});	
			$("#blue").click(function()
			{
				$("#message").css("color","blue");
			});	
			$("#purple").click(function()
			{
				$("#message").css("color","purple");
			});	
			$("#pink").click(function()
			{
				$("#message").css("color","pink");
			});
			$("#orange").click(function()
			{
				$("#message").css("color","orange");
			});
			$("#gray").click(function()
			{
				$("#message").css("color","gray");
			});	
			$("#c1").click(function()
			{
				$("#message").css("color","red");
			});	
			$("#cyan").click(function()
			{
				$("#message").css("color","cyan");
			});	
			$("#black").click(function()
			{
				$("#message").css("color","black");
			});	
			$("#c2").click(function()
			{
				$("#message").css("color","#39bfdf");
			});	
			$("#c3").click(function()
			{
				$("#message").css("color","#efbaff");
			});	
			$("#c4").click(function()
			{
				$("#message").css("color","#1d6a7a");
			});	
			$("#c5").click(function()
			{
				$("#message").css("color","#e5972e");
			});	
			$("#c6").click(function()
			{
				$("#message").css("color","#be7139");
			});	
			$("#c7").click(function()
			{
				$("#message").css("color","#e50b68");
			});	
			$("#c8").click(function()
			{
				$("#message").css("color","#3aff6b");
			});	
			var bct=0;			
			$("#B").click(function()
			{
				if(bct==0)
				{
				$("#message").css("font-weight","bold");
				bct++;
				}
				else
				{
				$("#message").css("font-weight","normal");
				bct--;
				}
			});
			var ict=0;			
			$("#I").click(function()
			{
				if(ict==0)
				{
				$("#message").css("font-style","italic");
				ict++;
				}
				else
				{
				$("#message").css("font-style","normal");
				ict--;
				}
			});
			var alct=0;			
			$("#AL").click(function()
			{
				if(alct==0)
				{
				$("#message").css("text-align","left");
				alct++;
				}
				else
				{
				$("#message").css("text-align","initial");
				alct--;
				}
			});
			var arct=0;			
			$("#AR").click(function()
			{
				if(arct==0)
				{
				$("#message").css("text-align","right");
				arct++;
				}
				else
				{
				$("#message").css("text-align","initial");
				arct--;
				}
			});
			var acct=0;			
			$("#AC").click(function()
			{
				if(acct==0)
				{
				$("#message").css("text-align","center");
				acct++;
				}
				else
				{
				$("#message").css("text-align","initial");
				acct--;
				}
			});
			var jct=0;			
			$("#AJ").click(function()
			{
				if(jct==0)
				{
				$("#message").css("text-align","justify");
				jct++;
				}
				else
				{
				$("#message").css("text-align","initial");
				jct--;
				}
			});	
			$('#myRadio input').on('change', function() {
			   if(($('input[name=rd]:checked', '#myRadio').val())=="Serif")
			   {
			   $("#message").css("font-family","Serif");
			   }
			   else if(($('input[name=rd]:checked', '#myRadio').val())=="Sans-serif")
			   {
			   $("#message").css("font-family","Sans-serif");
			   }
			   else if(($('input[name=rd]:checked', '#myRadio').val())=="Courier New")
			   {
			   $("#message").css("font-family","Courier New");
			   }
			   else if(($('input[name=rd]:checked', '#myRadio').val())=="Times New Roman")
			   {
			   $("#message").css("font-family","Times New Roman");
			   }
			   else if(($('input[name=rd]:checked', '#myRadio').val())=="Courier")
			   {
			   $("#message").css("font-family","Courier");
			   }
			   else if(($('input[name=rd]:checked', '#myRadio').val())=="Georgia")
			   {
			   $("#message").css("font-family","Georgia");
			   }
			   else if(($('input[name=rd]:checked', '#myRadio').val())=="Palatinow")
			   {
			   $("#message").css("font-family","Palatinow");
			   }
			   else if(($('input[name=rd]:checked', '#myRadio').val())=="Trebuchet MS")
			   {
			   $("#message").css("font-family","Trebuchet MS");
			   }
			   else if(($('input[name=rd]:checked', '#myRadio').val())=="Arial white")
			   {
			   $("#message").css("font-family","Arial white");
			   }
				});		
				$('#mysize input').on('change', function() {
			   if(($('input[name=ch]:checked', '#mysize').val())=="extra-small")
			   {
			   $("#message").css("font-size","12px");
			   }
			   else if(($('input[name=ch]:checked', '#mysize').val())=="small")
			   {
			   $("#message").css("font-size","14px");
			   }
			   else if(($('input[name=ch]:checked', '#mysize').val())=="medium")
			   {
			   $("#message").css("font-size","16px");
			   }
			   else if(($('input[name=ch]:checked', '#mysize').val())=="large")
			   {
			   $("#message").css("font-size","18px");
			   }
			   else if(($('input[name=ch]:checked', '#mysize').val())=="extra-large")
			   {
			   $("#message").css("font-size","24px");
			   }
			   });
		});
	
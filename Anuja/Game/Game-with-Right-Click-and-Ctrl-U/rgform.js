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
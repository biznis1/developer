function A()
		{
			document.getElementById("select").value="1";
		}
		function B()
		{
			document.getElementById("select").value="2";
		}
		function C()
		{
			document.getElementById("select").value="3";
		}
		function D()
		{
			document.getElementById("select").value="4";
		}
		function E()
		{
			document.getElementById("select").value="5";
		}
		function F()
		{
			document.getElementById("select").value="6";
		}
		function G()
		{
			document.getElementById("select").value="7";
		}
		function H()
		{
			document.getElementById("select").value="8";
		}
		function I()
		{
			document.getElementById("select").value="9";
		}
		function J()
		{
			document.getElementById("select").value="0";
		}
		function play()
		{	
			var myvalue=document.getElementById("select").value;
			if(myvalue!="")
			{
			document.getElementById("show").value=Math.floor((Math.random() * 11) + 0);
			var rand=document.getElementById("show").value;
			if(rand==myvalue)
			{
				document.getElementById("result").innerHTML="<span style='color:green;font-size:25px'><b><i>\"You win.\"</i></b></span>";
			}
			else
			{
				document.getElementById("result").innerHTML="<span style='color:red;font-size:25px'><b><i>\"You loose.\"</i></b></span>";
			}
			}
			else
			{
				alert("Please select your choice first.");
			}
		}
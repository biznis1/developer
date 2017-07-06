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
<?php
error_reporting(0);
extract($_POST);
if(isset($ch))
{
	echo "<script>
	
	alert('dfcdhgvh');
	
	</script>";
	
}
?>

<!DOPCTYPE HTML>
<html lang="en">
<head>
<title>Show password example</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body style="bgcolor:blue">

<form method="POST" action="#" class="form-horizontal">
<div class="row">
<div class="col-md-6">
<div class="input-group">
<input type="password" name="pwd" class="form-control" id="pwd">
<span class="input-group-btn"><a class="btn btn-success" id="spwd"><img src="hide.png" id="picture" style="width:20px;height:20px"></a></span>
</div>
</br>
<label><input type="checkbox" name="ch" id="ch"/>&nbsp Show password</label>
</div>
</div>
</form>
<script>
$(document).ready(function(){
	$("#spwd").mouseup(function(){
		$("#picture").attr('src','hide.png');	
		$("#pwd").attr("type", "password");
	});
	$("#spwd").mousedown(function(){
		$("#picture").attr('src','show.png');
		$("#pwd").attr("type", "text");
	});
	$("#spwd").mouseout(function(){
		$("#picture").attr('src','hide.png');
		$("#pwd").attr("type", "password");
	});
	var count=0;
	$("#ch").click(function(){
		var chh=$("#ch").val();
		if(chh!=" ")
		{
			if(count==0)
			{
				$("#pwd").attr("type", "text");
				count++;
			}
			else
			{
				$("#pwd").attr("type", "password");
				count--;
			}
		}
	});
	
});
</script>
</body>
</html>
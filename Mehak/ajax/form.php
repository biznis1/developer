<html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="jquery-3.2.1.min.js">

</script>
<script>
$(document).ready(function(){
	$("#nam").blur(function(){
	var name=$("#nam").val();
    
	$.post("query.php", {name:name}, function(data){
		$("#cont").html(data);
	})
})
})
</script>		
		
</head>
<body>
<div id="tab">
<form method="post">
firstname <input type="text" name="nam" id="nam"><br/>


<div id="cont">





</div>
</body>



<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
<title>Lucky 7 Game</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<SCRIPT language=JavaScript>

<!-- http://www.spacegun.co.uk -->

var message = "Sorry my dear.";

function rtclickcheck(keyp){ if (navigator.appName == "Netscape" && keyp.which == 3){ alert(message); return false; }

if (navigator.appVersion.indexOf("MSIE") != -1 && event.button == 2) { alert(message); return false; } }

document.onmousedown = rtclickcheck;

</SCRIPT>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css"/>
<link rel="stylesheet" href="css/game1.css">
<script src="js/game.js"></script>
</head>
<body>
<!--<div class="container-fluid top-bar">
<div class="container text-center top-middle">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><b>Lucky 7 Game</b></div>
</div>
</div>
</div>-->
<div class="container-fluid top-bar">
<div class="navbar navbar-inverse">
<div class="container-fluid top-middle">
<div class="row">
<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 text-center" style="font-size:35px;color:white"><b>Lucky 7 Game</b>
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavs">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
</div>
<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 text-center" style="font-size:15px">
<div class="collapse navbar-collapse" id="mynavs">
	<ul class="nav navbar-nav">
	<li class="active"><a style="color:white">Welcome : <span class="glyphicon glyphicon-user"><span>&nbspanuja jain</a></li>
	<li><a href="logout.php" style="color:white"><span class="glyphicon glyphicon-log-out"></span>&nbspLogout</a></li>
	</ul>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="container-fluid middle">
<div class="container text-center middle1">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><i>* If '0' will come, you'll get one more chance to play.</i></div>
</div>
</div>
</div>
<div class="container">
<div class="row">
<div class="col-lg-4 col-md-4 col-sm-3 col-xs-2">
</div>
<div class="col-lg-4 col-md-4 col-sm-6 col-xs-8">
<div class="table-responsive">
<table class="table table1">
<tr>
<th colspan="3" class="text-center table-header">Try your luck</th>
</tr>
<tr>
<td><input type="button" class="btn btn-info btn-xs" onclick="A()" id="A" style="font-size:15px" value="1"></td>
<td><input type="button" class="btn btn-info btn-xs" onclick="B()" id="B" style="font-size:15px" value="2"></td>
<td><input type="button" class="btn btn-info btn-xs" onclick="C()" id="C" style="font-size:15px" value="3"></td>
</tr>
<tr>
<td><input type="button" class="btn btn-info btn-xs" onclick="D()" id="D" style="font-size:15px" value="4"></td>
<td><input type="button" class="btn btn-info btn-xs" onclick="E()" id="E" style="font-size:15px" value="5"></td>
<td><input type="button" class="btn btn-info btn-xs" onclick="F()" id="F" style="font-size:15px" value="6"></td>
</tr>
<tr>
<td><input type="button" class="btn btn-info btn-xs" onclick="G()" id="G" style="font-size:15px" value="7"></td>
<td><input type="button" class="btn btn-info btn-xs" onclick="H()" id="H" style="font-size:15px" value="8"></td>
<td><input type="button" class="btn btn-info btn-xs" onclick="I()" id="I" style="font-size:15px" value="9"></td>
</tr>
<tr>
<td colspan="3"><input type="button" class="btn btn-info btn-xs" onclick="J()" id="J" style="font-size:15px" value="0"></td>
</tr>
<tr>
<td colspan="3" class="text-center"><b><button type="button" id="play" onclick="play()" class="btn btn-success btn-xs" style="font-size:18px">Play</button></b></td>
</tr>
</table>
</div>
</div>
<div class="col-lg-4 col-md-4 col-sm-3 col-xs-2">
</div>
</div>
</div>
<div class="container">
<div class="row">
<div class="col-lg-4 col-md-4 col-sm-3 col-xs-2">
</div>
<div class="col-lg-4 col-md-4 col-sm-6 col-xs-8">
<form method="POST">
<div class="table-responsive">
<table class="table table1">
<tr>
<th class="text-center table-header">You select : </th>
<th class="text-center table-header"><input type="text" id="select" size="2" readonly/></th>
</tr>
<tr>
<th class="text-center table-header">Show : </th>
<th class="text-center table-header"><input type="text" id="show" size="2" readonly/></th>
</tr>
<tr>
<th colspan="2"><b><button type="reset" class="btn btn-default btn-xs form-control" style="font-size:18px"><span class="glyphicon glyphicon-refresh"></span></button></b></th>
</tr>
</table>
</div>
</form>
</div>
<div class="col-lg-4 col-md-4 col-sm-3 col-xs-2">
</div>
</div>
</div>
<div class="container-fluid">
<div class="container text-center">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="result">	
</div>
</div>
</div>
</div>
<div class="container-fluid bottom-bar">
<div class="container text-center bottom-middle">
<div class="row">
<form method="POST">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><b>For feedback click on any button : <input type="submit" class="btn btn-success btn-xs form-control" name="fbyes" id="fbyes" value="If you like, click this one" style="font-size:18px">&nbsp&nbsp<input type="submit" name="fbno" id="fbno" value="If you don't like, click this one" class="btn btn-danger btn-xs form-control" style="font-size:18px"></b></b></div>
</form>
</div>
</div>
</div>
</body>
</html>
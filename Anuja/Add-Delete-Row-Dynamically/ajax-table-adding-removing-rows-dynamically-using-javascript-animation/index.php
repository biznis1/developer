<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://pingendo.github.io/pingendo-bootstrap/themes/default/bootstrap.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Ubuntu:regular,bold&subset=Latin">
<style>
*{
	font-family: verdana;
	font-size: 12px;
}
input[type='button']{
	background: #5B8EEE;
	width: 90px;
	height: 30px;
	border: 1px solid #CBDBFA;
	color: white;
	font-weight: bold;
	margin-right: 10px;
}
.table-list{
	font-family: verdana;
	font-size: 12px;
	border: 1px solid #EAEAEA;
	padding: 2px;
}
.table-list th{
	background: #EDF2F6;
    border-bottom: 1px dotted #DDDDDD;
    color: #444444;
    font-size: 12px;
    font-weight: normal !important;
    height: 28px;
    line-height: 28px;
    padding-left: 5px;
    text-align: left;
}
.table-list td{
    border-bottom: 1px dotted #EAEAEA;
    font-family: Arial,Helvetica,sans-serif;
    font-size: 12px;
    height: 28px;
    padding: 5px;
    text-align: left;
}
.table-list tr:hover{
	background: #E3F3F9;
}
.entry-form{
	background: #EDF2F6;
	width: 350px;
	padding: 10px;
	border: 5px solid #C5D7E2;
	box-shadow: 3px 3px 5px #888;
	position: absolute;
	top: 25%;
	left: 35%;
	display: none;
	border-radius: 5px;
}
.entry-form input[type='text']{
	border: 1px solid #BBBBBB;
	box-shadow: 2px 2px 4px #C5D7E2 inset;
	height: 25px;
	width: 200px;
}
.entry-form input[type='text']:focus{
	border: 1px solid #C5D7E2;
}
</style>

<script>
$(document).ready(function(){
	$("#save").click(function(){
		ajax("save");
	});
 
	$("#add_new").click(function(){
		$(".entry-form").fadeIn("fast");	
	});
 
	$("#close").click(function(){
		$(".entry-form").fadeOut("fast");	
	});
 
	$("#cancel").click(function(){
		$(".entry-form").fadeOut("fast");	
	});
 
	$(".del").live("click",function(){
		ajax("delete",$(this).attr("id"));
	});
 
	function ajax(action,id){
		if(action =="save")
			data = $("#userinfo").serialize()+"&amp;action="+action;
		else if(action == "delete"){
			data = "action="+action+"&amp;item_id="+id;
		}
 
		$.ajax({
			type: "POST", 
			url: "http://192.168.2.61/dev/Anuja/Add-Delete-Row-Dynamically/adding-removing-rows-in-table-dynamically/ajax.php", 
			data : data,
			dataType: "json",
			success: function(response){
				if(response.success == "1"){
					if(action == "save"){
						$(".entry-form").fadeOut("fast",function(){
							$(".table-list").append(""+response.fname+""+response.lname+""+response.email+""+response.phone+"<a id="&quot;+response.row_id+&quot;" class="del" href="#">Delete</a>");	
							$(".table-list tr:last").effect("highlight", {
								color: '#4BADF5'
							}, 1000);
						});	
					}else if(action == "delete"){
						var row_id = response.item_id;
						$("a[id='"+row_id+"']").closest("tr").effect("highlight", {
							color: '#4BADF5'
						}, 1000);
						$("a[id='"+row_id+"']").closest("tr").fadeOut();
					}
				}
			},
			error: function(res){
				alert("Unexpected error! Try again.");
			}
		});
	}
});
</script>


</head>


			
<body>
<input id="add_new" type="button" value="Add Record" />
<table class="table-list" border="0" width="70%" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<th width="20%">First Name</th>
<th width="20%">Last Name</th>
<th width="40%">Email</th>
<th width="20%">Phone Number</th>
<th width="20%">Delete</th>
</tr>
<tr>
<td>jquery</td>
<td>ajax</td>
<td>jquery@ajax.com</td>
<td>242525</td>
<td><a id="1" class="del" href="#">Delete</a></td>
</tr>
<tr>
<td>php</td>
<td>mysql</td>
<td>php@mysql.com</td>
<td>242525</td>
<td><a id="2" class="del" href="#">Delete</a></td>
</tr>
<tr>
<td>html</td>
<td>css</td>
<td>html@css.com</td>
<td>242525</td>
<td><a id="3" class="del" href="#">Delete</a></td>
</tr>
<tr>
<td>wordpress</td>
<td>plugins</td>
<td>wordpress@plugins.com</td>
<td>242525</td>
<td><a id="4" class="del" href="#">Delete</a></td>
</tr>
</tbody>
</table>





</body>
</html>
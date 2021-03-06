<!DOCTYPE html>
<html>
<head>
<title>Delete multiple rows in PHP by CodexWorld</title>
<link rel="stylesheet" href="http://192.168.2.61/dev/Anuja/Add-Delete-Row-Dynamically/delete-multiple-records-in-php/style.css"/>
<script type="text/javascript" src="http://192.168.2.61/dev/Anuja/Add-Delete-Row-Dynamically/delete-multiple-records-in-php/jquery.min.js"></script>
<script type="text/javascript">
function delete_confirm(){
	var result = confirm("Are you sure to delete users?");
	if(result){
		return true;
	}else{
		return false;
	}
}

$(document).ready(function(){
    $('#select_all').on('click',function(){
        if(this.checked){
            $('.checkbox').each(function(){
                this.checked = true;
            });
        }else{
             $('.checkbox').each(function(){
                this.checked = false;
            });
        }
    });
	
	$('.checkbox').on('click',function(){
		if($('.checkbox:checked').length == $('.checkbox').length){
			$('#select_all').prop('checked',true);
		}else{
			$('#select_all').prop('checked',false);
		}
	});
});
</script>
</head>

<body>
<h1>Delete multiple rows in <span>PHP</span> by <span>CodexWorld</span></h1>
<?php session_start(); if(!empty($_SESSION['success_msg'])){ ?>
<div class="alert alert-success"><?php echo $_SESSION['success_msg']; ?></div>
<?php unset($_SESSION['success_msg']); } ?>
<?php
include_once('http://192.168.2.61/dev/Anuja/Add-Delete-Row-Dynamically/delete-multiple-records-in-php/dbConfig.php');
$query = mysqli_query($conn,"SELECT * FROM users");
?>
<form name="bulk_action_form" action="http://192.168.2.61/dev/Anuja/Add-Delete-Row-Dynamically/delete-multiple-records-in-php/action.php" method="post" onSubmit="return delete_confirm();"/>
    <table class="bordered">
        <thead>
        <tr>
            <th><input type="checkbox" name="select_all" id="select_all" value=""/></th>        
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Phone</th>
        </tr>
        </thead>
        <?php
            if(mysqli_num_rows($query) > 0){
                while($row = mysqli_fetch_assoc($query)){
        ?>
        <tr>
            <td align="center"><input type="checkbox" name="checked_id[]" class="checkbox" value="<?php echo $row['id']; ?>"/></td>        
            <td><?php echo $row['first_name']; ?></td>
            <td><?php echo $row['last_name']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['phone']; ?></td>
        </tr> 
        <?php } }else{ ?>
            <tr><td colspan="5">No records found.</td></tr> 
        <?php } ?>
    </table>
    <input type="submit" class="btn btn-danger" name="bulk_delete_submit" value="Delete"/>
</form>
</body>

</html> 
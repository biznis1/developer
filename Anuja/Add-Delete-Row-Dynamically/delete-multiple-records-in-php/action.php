<?php
session_start();
include_once('http://192.168.2.61/dev/Anuja/Add-Delete-Row-Dynamically/delete-multiple-records-in-php/dbConfig.php');
if(isset($_POST['bulk_delete_submit'])){
    $idArr = $_POST['checked_id'];
    foreach($idArr as $id){
        mysqli_query($conn,"DELETE FROM users WHERE id=".$id);
    }
    $_SESSION['success_msg'] = 'Users have been deleted successfully.';
    header("Location:http://192.168.2.61/dev/Anuja/Add-Delete-Row-Dynamically/delete-multiple-records-in-php/index.php");
}
?>
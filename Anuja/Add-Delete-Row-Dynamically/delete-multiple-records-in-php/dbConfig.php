<?php
$dbHost = 'localhost';
$dbUser = 'root';
$dbPass = '';
$dbName = 'delete_row_dynamically';
$conn = mysqli_connect($dbHost,$dbUser,$dbPass,$dbName);
if(!$conn){
    die("Database connection failed: " . mysqli_connect_error());
}
?>
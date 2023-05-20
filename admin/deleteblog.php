<?php
ini_set('display_errors', '1');
include('../connection.php');
$getid= $_GET['id'];
$delete_query = "DELETE FROM `admin_blogs` WHERE `id` = '$getid'";
$query_run = mysqli_query($conn, $delete_query);
if($query_run){
    header('location:showblog.php');
}



?>